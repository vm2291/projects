<?php

session_start();
if(!isset($_SESSION['fullname']))
{
    header('Location: index.php');
    exit();
}

include 'config.php';
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

    <!-- header section link -->
    <?php include 'admin_header.php'; ?>



    <section class="dashboard">

        <h1 class="heading"> Dashboard</h1>

        <div class="box-container">

            <div class="box">
                
                <?php
                /* Method on displaying total data in the dashboard*/
                $result = mysqli_query($conn,"SELECT * FROM students");
                $rows = mysqli_num_rows($result);
                echo '<h4 class="tot"> '. $rows .' </h4>'
                ?>
                <p> Total Students </p>
                <a href="students.php" class="btn"> View </a>
            </div>

        </div>

    </section>







    <!-- footer section link -->
    <?php include 'footer.php';?>
    <!-- js file link -->
    <script src="admin_script.js"></script>
</body>

</html>
