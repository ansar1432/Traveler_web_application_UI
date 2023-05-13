<?php
session_start();
// FILE CALLED FROM Submit.php IN CASE OF FAILURE
echo "Login Failure for user: ";
echo $_SESSION['usern'];

echo "<br>";
echo "Click here to Re attemp Login: ";
//session_destroy();
?>