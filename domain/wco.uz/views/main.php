<?php
use wco\kernel\WCO;
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset = utf-8">
        <?php
        $this->Seo();
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?=WCO::$config['protocol'].$_SERVER['SERVER_NAME']?>/template/default/img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="/template/default/libre/bootstrap-4.4.1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="/template/default/libre/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="/template/default/css/style.css?v=2">
        <link rel="stylesheet" href="/template/default/css/mobail_menu.css">
        <script src="https://yandex.st/jquery/2.1.1/jquery.min.js"></script>
    </head>
    <body>
        <?=$this->views?>
    </body>
</html>

