<?php
session_start();
$uname      = $_POST['uname'];
$pwd        = $_POST['pswd'];
$_SESSION['usern'] = $uname;
$db_user    = 'root';
$db_pass    = "";
$db         = 'travia travels';//test

$con = mysqli_connect('localhost',$db_user,$db_pass) or die('Unable to connect database');
mysqli_select_db($con,$db) or die('cannot');
$sql= "SELECT * from login where uname = '$uname' AND pswd = '$pwd'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) > 0 )
 {
     //$result = mysqli_query($con,$sql);
     $row=mysqli_fetch_array($result);
     {
         header('location: home.php');
     }
  }
else {
     header ('location: exit.php');
 }
 mysqli_close();
 ?>
