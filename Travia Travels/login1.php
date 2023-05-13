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
        <form action="submit.php" method="post">
         <div class="form-group"> 
        <h1 class="heading">login</h1>
        <input type="email" placeholder="email" autocomplete="off" class="email" required name="uname">
        <input type="password" placeholder="password" autocomplete="off" class="password" required name="pswd">
        <button class="submit-btn">log in</button>
        <!-- <a href="/register.html" class="link">don't have an account? Register one</a>
        -->
        <a class ="link" href="register.php">register now</a>
    </div>

   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
