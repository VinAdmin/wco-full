<?php

class SiteController extends \wco\kernel\Controller{
    public function actionIndex() {
        $this->generate('/index/index.php');
        return true;
    }
    
    public function actionTest() {
        $this->generate('/index/test.php');
        return true;
    }
}
