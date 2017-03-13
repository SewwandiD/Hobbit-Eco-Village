<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php include "db.php";?>

<?php
$query = "SELECT * FROM `user login` WHERE `submission_id` = '$submission_id'";
$sqlsearch = mysql_query($query);
$resultcount = mysql_numrows($sqlsearch);

if ($resultcount > 0) {
 
    mysql_query("UPDATE `user login` SET 
                                `username` = '$username',
                                `password` = '$password',        
                             WHERE `submission_id` = '$submission_id'") 
     or die(mysql_error());
    
} else {

    mysql_query("INSERT INTO `user login` (submission_id, username,password) 
                               VALUES ('$submission_id','$username', '$password') ") 
    or die(mysql_error());  

}
?>

<?php
$conn->close();
?>
</body>
</html>