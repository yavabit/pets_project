<?php

require('config/db_config.php');

$client_id = 8166988; // ID приложения
$client_secret = 'TzTEbp5HiZlboxUohBWR'; // Защищённый ключ
$redirect_uri = 'https://pets-help31.ru/auth.php'; // Адрес сайта

$url = 'http://oauth.vk.com/authorize'; // Ссылка для авторизации на стороне ВК
$params = [ 'client_id' => $client_id, 'redirect_uri'  => $redirect_uri, 'response_type' => 'code']; // Массив данных, который нужно передать для ВК содержит ИД приложения код, ссылку для редиректа и запрос code для дальнейшей авторизации токеном

if (isset($_GET['code'])) {
    $result = true;
    $params = [
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'code' => $_GET['code'],
        'redirect_uri' => $redirect_uri
    ];

    $token = json_decode(file_get_contents('https://oauth.vk.com/access_token' . '?' . urldecode(http_build_query($params))), true);

    if (isset($token['access_token'])) {
        $params = [
            'uids' => $token['user_id'],
            'fields' => 'uid,first_name,last_name,screen_name,sex,bdate,photo_big',
            'access_token' => $token['access_token'],
            'v' => '5.101'];

        $userInfo = json_decode(file_get_contents('https://api.vk.com/method/users.get' . '?' . urldecode(http_build_query($params))), true);
        if (isset($userInfo['response'][0]['id'])) {
            $userInfo = $userInfo['response'][0];
            $result = true;
        }
    }

    if ($result) {
        //print_r($userInfo);
        $_SESSION['user']['id'] = $userInfo['id'];
        $_SESSION['user']['first_name'] = $userInfo['first_name'];
        $_SESSION['user']['last_name'] = $userInfo['last_name'];
        $_SESSION['user']['bdate'] = $userInfo['bdate'];
        $_SESSION['user']['photo_big'] = $userInfo['photo_big'];

        $sql = "INSERT INTO `users` (`id`, `email`, `number`, `first_name`, `last_name`, `address`, `info`, `birth_date`)
                VALUES ('{$userInfo['id']}', '', '', '{$userInfo['first_name']}', '{$userInfo['last_name']}', '', '', '{$userInfo['bdate']}');";
        $query = mysqli_query($link, $sql);
    }
}