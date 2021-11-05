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

            ?>
			<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Simple Calculator</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
		          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

   
   </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-blue fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">Calculator</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#calculator">Calculator</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Welcome to Calculator</h1>
                <p class="lead">Calculate your Loan and interest</p>
                <a class="btn btn-lg btn-light" href="#calculator">Calculate Now</a>
            </div>
        </header>
        <!-- About section-->
        <section id="calculator">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Simple Credit Calculator</h2>
						<div>
                       <form name="calculate" method="post">
  <div class="form-group row">
    <label for="credit" class="col-4 col-form-label">Text Field</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-money"></i>
          </div>
        </div> 
        <input id="credit" name="credit" value="100,000" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="interest" class="col-4 col-form-label">Interest</label> 
    <div class="col-8">
      <select id="interest" name="interest" class="custom-select" required="required">
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="term" class="col-4 col-form-label">Term</label> 
    <div class="col-8">
      <select id="term" name="term" class="custom-select" required="required">
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit"  class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
<div>
	<script type="text/javascript">
function calculatecredit() {
	
 credit= document.getElementById("credit").value;
  interest= Number(document.getElementById("interest").value);
  term= Number(document.getElementById("term").value);
 //let payment;
  i=Number(interest/100/12);
  n=Number(term*12);	
 num=Number((1+i)^n);
  number=Number(i*num);
 
   payment=(credit*number)/(num-1);
alert(payment);
 
}
</script>
<?php

	
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



?>


</div>
<div>

</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
        <section class="bg-light" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Services we offer</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact section-->
        <section id="contact">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Contact us</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

			<?php
        }

        public function index()
        {
            return $this->controller->sayWelcome();
        }

        public function action()
        {
            return $this->controller->takeAction();
        }

    }?>
