<?php
class Controller {

    protected $view;
    protected $model;

    public function __construct() {
        $this->view = new View();
        $this->model = new Model();
    }

    public function isLogin() {
        if(isset($_COOKIE['login'])) return true;
        return false;
    }
}