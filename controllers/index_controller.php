<?php

    /**
    * The home page controller
    */
    class IndexController
    {
        private $model;

        function __construct($model)
        {
            $this->model = $model;
        }

        public function sayWelcome()
        {
            return $this->model->welcomeMessage();
        }
        public function calculate()
        {
            $credit=$_POST["credit"];
            $interest=$_POST["interest"];
            $term=$_POST["term"];
            $i=($interest/100)/12;
            $n=$term*12;
            $num=pow((1+$i),$n);
            $payment=($credit*$i*$num)/($num-1)*1000;
            echo "Monthly Payment = ".round($payment,3).'<br/>';
            $payment= round($payment,3);
            $totalinterest=($payment*$n);
            echo "Total Amount to be Paid along with interest=". $totalinterest;
        }
    }