<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Hobbit Eco Village</title>

 <meta charset="utf-8">
<?php include 'LinkSheet.php'; ?>
  <style type="text/css">
  a:active {
	color: #000000;
}
  body,td,th {
	color: #FFF;
}
  body {
	background-color: #FFF;
}
  </style>
  
  <?php include 'Script.php';?>
  
   <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  
<div class="container">
<h1><b>Hobbit Eco Village</b></h1>
<br/>

  <div class="header"><a href="#">
  <?php include 'Logo.php'; ?>

<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->


</head>
<?php include 'ChatW.php';?>
<!--chat window-->


<body background="IImages/Other/nature-design-with-bokeh-effect_1048-1882.jpg"
data-spy="scroll" data-target="#myScrollspy" data-offset="15">

<?php include 'FB.php'; ?>

<!--<div class="container-fluid" color:#fff;height:220px;">-->
<?php include 'SliderB.php';?>
<br/>


  <?php include 'Navbar.php'; ?>
  	  
      <div id="section1">   
      <h1>Welcome to Hobbit Eco Village !</h1>
      </div>
      
      <div class="container">
      <div class="row">
      <div class="col-sm-9">
     	<!--Loggin Window--> 
      <label>Check In: <input type="text" id="datepicker" ></label>  
      <label>Check Out: <input type="text" id="datepicker"></label>
      <button onclick="Sign In" type="button" value="submit" style="background-color:inherit"/> Check Availability</button>
      <br/>
      <br/>
      </div>
      
      
      <div class="row">
      <div class="col-xs-sm-md-lg-6">
      <button onclick="Log In" type="button" value="submit" style="background-color:inherit"/>Log In</button>
      <button onclick="Sign In" type="button" value="submit" style="background-color:inherit"/> Sign In</button>
       <!--facebook-->
       <?php include 'FB2.php'; ?>
 <!--facebook-->
      
      </div>
      </div>
      </div>
      
        <div class="container">
  <div class="row">
    <nav class="col-sm-3" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">    
    </nav>
    <div class="col-sm-8">
      <div id="section1">    
        <?php include 'IndexCon.php';?>
      </div>
    </div>
  </div>
</div>
</body>
</html>
