<?php
/**
 * Файл конфигурацый.
 */

ini_set('date.timezone', 'Asia/Tashkent');
$config = [
    'template' => 'default', //Подключаемая дериктория шаблона.
    'protocol' => 'http://', //Исполняемый протокол
    //Данные отправки почты.
    'email' => [
        'host' => '',     //Адрес хоста 127.0.0.1
        'username' => '', //Учетная запись
        'password' => '', //Пароль
        'port' => 587,    //Порт
    ],
    'modules' => [
        'apiController' => 'modules/apiv2/',
    ],
    'default_page_auth' => false,
    'debug' => true,
    'uri' => [],
    'domain_alias' => [
        'wco.loc' => 'wco.uz',
        'aa' => 'bb',
    ],
]
?>