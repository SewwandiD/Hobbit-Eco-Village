<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <?php
// define variables and set to empty values
$name = $email = $gender = $comment = $id = $nationality = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["id"]);
  $website = test_input($_POST["nationality"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>User Registration Form</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name:	<input type="text" name="name">
  <br><br>
  E-mail:	<input type="varchar" name="email">
  <br><br>
  ID card No:	<input type="int" name="id">
  <br><br>
  Nationality:	<input type="text" name="nationality">
  <br><br>
  Comment:	<textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br><br>
  Password: <input type="password" name="password" id="7" />
  <br><br>
  Retype Password: <input type="password" name="password" id="7" />
  <br><br>
  <button onclick="Sign In" type="button" value="submit" style="background-color:inherit"/> Submit</button> 
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $id;
echo "<br>";
echo $nationality;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>    
</body>
</html>