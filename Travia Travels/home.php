<?php
if(!empty($_POST))
{
    // $id=$_POST['id'];
    $where=$_POST['location'];
	$when = $_POST['date'];
	$guest = $_POST['guests'];
	$db_user    = 'root';
	$db_pass    = "";
	$db         = 'travia travels';//test

	$con = mysqli_connect('localhost',$db_user,$db_pass) or die('Unable to connect database');

	mysqli_select_db($con,$db)or die("cannot connect database practice");	
	// $sql="insert into book_tour2('where to','when to','guest') values('".$where."','".$when."',.$guest.)";

    $sql=" INSERT INTO book_tour2 ( `where to`, `when to`, `guest`) VALUES ('.$where.', '$when', '.$guest.')";

    // INSERT INTO `book_tour` (`id`, `uid`, `where to`, `when to`, `guest`) VALUES (NULL, '1', 'dubai', '2023-01-10', '1');

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
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travia Trvaels.</title>

   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body style="overflow: hidden;">
   
<!-- header section starts  -->

<header class="header" data-aos="fade-down">

   <section class="flex">

      <a href="home.html" class="logo">TRAVIA TRAVELS.</a>

      <nav class="navbar">
         <a href="home.html">home</a>
         <a href="about.html">about</a>
         <a href="tours.html">tours</a>
         <a href="destinations.html">destinations</a>
         <a href="contact.html">contact</a>
         <a href="login1.php">login</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<div class="container home" data-aos="zoom-out">

   <section class="flex" data-aos="zoom-in" data-aos-delay="600">

      <form action="" method="post">
         <form action="book.php" method="post">
         <h3>book your tour</h3>
         <p>where to</p>
         <input type="text" name="location" required maxlength="50" placeholder="enter tour location" class="box" >
         <p>when to</p>
         <input type="date" name="date" class="box" required >
         <p>how many</p>
         <input type="number" name="guests" min="1" max="10" maxlength="2" placeholder="number of guests" required class="box" name="guest">
         <input type="submit" value="book tour" name="book" class="btn">
         
         
      </form>

   </section>

</div>

<!-- home section ends -->



<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>