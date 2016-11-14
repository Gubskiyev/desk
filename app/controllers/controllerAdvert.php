<?php

class ControllerAdvert extends Controller {

    public function __construct() {
        //if(!$this->isLogin()) header('Location: /user/login');
        $this->model = new ModelAdvert();
        $this->view = new View();
    }

    public function actionView() {
        $data = '';
        $this->view->render('Форум','viewAdvertIndex.php','template.php', $data);
    }
}