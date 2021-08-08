<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       <head>
  <title>Sparks Foundation| Basic Banking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
        <link rel="stylesheet" href="css/banking.css"/>
        
    </head>
    <body>
        <?php
        // put your code here
        include "includes/header.php";
        ?>
        
        <div class="jumbotron text-center">
            <h1 class="">Welcome</h1>
            <h2>To</h2>
            <h1>The Sparks Foundation</h1>
        </div>
        <!-- Activity section -->
    <div class="container">
        <div class="site-title text-left">
				<h3>Customer's Service's</h3>
				
			</div>
        
            <div class="row activity text-center">
                <div class="col-md-4" style="">
                   <img src="img/user.jpg" class="img-fluid">
                      <br>
                      <a href="createuser.php"><button>Create a User</button></a>
                </div>
               <div class="col-md-4" style="">
                    <img src="img/transfer.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                </div>
                <div class="col-md-4" style="">
                    <img src="img/history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                 </div>
            </div>
   </div> 
      
       <div class="about-section">
		<div class="container">
			<div class="site-title text-center">
				<h3>About Us</h3>
				<p>We connect students of all financial backgrounds with experts. Knowledge sharing enables equal opportunity for all. </p>
			</div>
			<div class="about-inner-section">	
			    <div class="col-md-6 about-right">
                                <img src="img/logo_small.png" alt=" ">
			</div>
				<div class="col-md-6 about-inner-column">
                                    <h4><b>Our vision</b> </h4>
					<p>A world of enabled and connected little minds, building future.</p>
                                        <h5><b>Inspire</b></h5>
                                        <p>To inspire, motivate and encourage students to learn, create and help build a better society.</p>
                                        <h5><b>Innovate</b></h5>
                                        <p>To teach new ways of thinking, to innovate and solve the problems on their own. </p> 
                                        </div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
        
         <!-- end Activity section -->
      <br>   
      <br>
      <?php
        // put your code here
        include "includes/footer.php"
        ?>
        
    </body>
</html>
