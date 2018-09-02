<?php

class controller {

    protected $db;

    public function __construct() {
        global $config;        
    }

    public function loadView($viewName, $viewData = array()) {
        if ($viewData) {
            extract($viewData);
        }
        include 'views/' . $viewName . '.php';
    }

    public function loadTemplate($viewName, $viewData =null) {
        //include 'views/template.php';
        if ($viewData) {
            extract($viewData);
        }
        include 'views/' . $viewName . '.php';
    }

    public function loadViewInTemplate($viewName, $viewData = null) {
        if ($viewData) {
            extract($viewData);
        }
        include 'views/' . $viewName . '.php';
    }

}
