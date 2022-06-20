<?php
session_start();
ini_set('date.timezone', 'Asia/Tashkent');
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$config = [
    'template' => 'uptown',
    'protocol' => 'http://',
    'email' => [
        'host' => 'mail.texnoblog.uz',
        'username' => 'admin@texnoblog.uz',
        'password' => 'admtexno10',
        'port' => 587,
    ],
    'telegram' =>[
        0 => '1276179525:AAGmM4aHyobtv2TjOFPaFzViZ_p6UIu1aT4',
    ],
    'modules' => [
        'apiprogramController' => 'modules/apiv2/',
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