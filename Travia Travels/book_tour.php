<?php

   $connection = mysqli_connect('localhost','root','','book_tour');
   if(isset($_POST['send'])){
      $number = $_POST['date'];
      $number  = $_POST['guests'];
      $text = $_POST['location'];
      
      $request = " insert into book_tour('where to','how many', 'when to') values('$location','$guests','$date') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }
