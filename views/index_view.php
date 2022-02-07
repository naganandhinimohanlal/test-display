<?php
error_reporting(0);
    /**
    * The home page view
    */
    class IndexView
    {

        private $model;

        private $controller;

        function __construct($controller, $model)
        {
            $this->controller = $controller;
            $this->model = $model;
        }
        public function index()
        {
            include 'calc.php';
        }
        public function calculate()
        {
            return $this->controller->calculate();
        }

    }?>
