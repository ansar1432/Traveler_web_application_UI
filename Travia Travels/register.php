<?php
if(!empty($_POST))
{
	$uname = $_POST['uname'];
	$pwd = $_POST['pswd'];
	$db_user    = 'root';
	$db_pass    = "";
	$db         = 'travia travels';//test

	$con = mysqli_connect('localhost',$db_user,$db_pass) or die('Unable to connect database');

	mysqli_select_db($con,$db)or die("cannot connect database practice");	
	$sql="insert into login(uname,pswd) values('".$uname."','".$pwd."')";

	$result=mysqli_query($con, $sql);

	if($result)
	{
		 echo "You have successfully created new account";
	}
	else{
		 echo "Operation Failure please re-attempt";
	}

		
}
?>  
<!-- <form id="insert_form" name="insert_form" method="post" action="">
  <table width="285" border="1">
    <tr>
      <th colspan="3" scope="col"><em><strong>Insert User Record</strong></em></th>
    </tr>
    <tr>
      <td width="78"><em><strong>Username</strong></em></td>
      <td width="144"><em><strong>
      <input type="text" name="uname" id="uname" />
      </strong></em></td>
      <td width="22">&nbsp;</td>
    </tr>
    <tr>
      <td><em><strong>Password</strong></em></td>
      <td><em><strong>
      <input type="password" name="pswd" id="pswd" />
      </strong></em></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><em><strong></strong></em></td>
      <td><input type="submit" name="submit" id="submit" value="Submit"  /></td>
      
     
    </tr>
  </table>
</form> -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css" />
</head>
<body>

    <div class="alert-box">
        <p class="alert"></p>
    </div>

    <div class="form">
        <form action="" method="post">
        <h1 class="heading">Register</h1>
        <input type="text" placeholder="name" autocomplete="off" class="name" required >
        <input type="email" placeholder="email" autocomplete="off" class="email" required name="uname">
        <input type="password" placeholder="password" autocomplete="off" class="password" required name="pswd">
        <button class="submit-btn">register</button>
        <a href="login1.php" class="link">already have an account ? log in here</a>
    </div>

    <script src="js/form.js"></script>
    
</body>
</html>