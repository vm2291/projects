<?php

session_start();
if(!isset($_SESSION['fullname']))
{
    header('Location: index.php');
    exit();
}

include 'config.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title> Digital Innovations Academy </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="admin_style.css">

    <!-- icons cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
    

<body>
    
    <?php include 'admin_header.php';?>
    <section class="students">
    
    <h1 class="heading"> Students </h1>
    
    
    
    
    </section>
    
    
    
     <script src="admin_script.js"></script>
</body>
</html>