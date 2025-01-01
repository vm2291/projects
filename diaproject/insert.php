<?php

session_start();
if(!isset($_SESSION['fullname']))
{
    header('Location: index.php');
    exit();
}

include 'config.php';
if (isset($_POST['buttonSubmit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];
    
    $query="INSERT INTO students(name, email, age, gender, course) VALUES('$name', '$email', '$age', '$gender', '$course')";
    $result=mysqli_query($conn, $query);
    if($result){
        echo "<script>alert('Student has been registered successfully!')</script>";
    }
    else {
        echo "<script> alert ('Something went wrong, student not registered!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title> Students </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <!-- boostrap link -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous"> -->

    <!-- icons cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css -->

    <link rel="stylesheet" href="admin_style.css">

    <link rel="stylesheet" href="students.css">


</head>


<body>

    <?php include 'admin_header.php';?>

    <section class="students"> 

    <h1 class="heading"> Students </h1>

    <!-- Registration form -->
    <div class="form">

        <form action="" method="post" class="studentsreg">
            <p class="registration"> Registration </p>

            <div class="input-box">
                <input type="text" placeholder="Name" name="name">
            </div>

            <div class="input-box">
                <input type="email" placeholder="Email" name="email">
            </div>

            <div class="input-box">
                <input type="number" placeholder="Age" name="age">
            </div>


            <div class="radio-group">
                <label class="radio">
                    <input type="radio" name="gender" value="male"> Male
                    <span></span>
                </label>
                <label class="radio">
                    <input type="radio" name="gender" value="female"> Female
                    <span></span>
                </label>
            </div>


            <div class="input-box">
                <select class="" name="course">
                    <option value=""> Select Course </option>
                    <option value="front-end-development">Front-End Development</option>
                    <option value="back-end-development">Back-End Development</option>
                </select>
            </div>

            <div class="input-btn">
                <input type="submit" name="buttonSubmit" value="Submit">
            </div>

        </form>
        
    </div>


    </section> 

    <script src="admin_script.js"></script>
</body>

</html>
