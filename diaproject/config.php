<?php
$server= "localhost";
$user= "root";
$pass= "";
$database= "diaproject";

//connection with the above mentioned data
$conn= mysqli_connect ($server, $user, $pass, $database);

if (!$conn)
{
    die("<script> alert('Something went wrong. Please try again!')</script>");
}

?>
