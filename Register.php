<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>User Register Form</title>

 <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<h1 align="middle"><b>Hobbit Eco Village</b></h1>

  <div class="header">
 <?php include 'Logo.php'; ?>

</head>

<body background="IImages/Other/21.jpg" data-spy="scroll" data-target="#myScrollspy" data-offset="15">
<div class="container-fluid"; color:#fff;height:220px;">


<?php /*?><?php "(include_path='Music.php')";?><?php */?>
<embed src="Relaxing Music Therapy - Relaxing Nature Scenes - Relaxing Piano Music - Nature Scenes Meditation.mp3" autostart="true" loop="true"
width="2" height="0">


  <div class="container">
  <div class="row">
    <nav class="col-sm-3" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">    
    </nav>
    
    <div class="col-sm-9">
    
     
<?php /*?><?php "(include_path='Vedio.php')";?><?php */?>
<video id="myVideo" width="320" height="176">
  <source src='Hiking Sri Lanka.mp4' type="video/mp4">
  <!--<source src="Hiking Sri Lanka.ogg" type="video/ogg">-->
  Your browser does not support HTML5 video.
</video>

<div>

<button onclick="playVid()" type="button" style="background-color:inherit; text-emphasis:!important">Play Video</button>
<button onclick="pauseVid()" type="button" style="background-color:inherit">Pause Video</button><br>

</div>
<script> 
var vid = document.getElementById("myVideo"); 

function playVid() { 
    vid.play(); 
} 

function pauseVid() { 
    vid.pause(); 
} 
</script> 

<div class="modal-body row">
<div class="col-md-8">

    <?php include 'Form.php';?>
     </div>
    
    
    <div class="col-md-4">
    <h1>User Login Form</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Username:	<input type="text" name="name">
  <br><br>
  Password:	<input type="password" name="email">
  <br><br>
  
  <button onclick="Sign In" type="button" value="submit" style="background-color:inherit"/> Submit</button> 
</form>
  
  </div>
</div>
  
</body>
</html>
