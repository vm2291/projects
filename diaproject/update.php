<?php

session_start();
if(!isset($_SESSION['fullname']))
{
    header('Location: index.php');
    exit();
}

include 'config.php';

if (isset($_GET['id'])){
    $id=$_GET ['id'];
    $query="SELECT *FROM students where id='$id'";
    $result=mysqli_query($conn, $query);
    if(mysqli_num_rows($result)>0) {
        $row=mysqli_fetch_assoc($result);
        } 
    else {
        $row="";
    }
    
    if (isset($_POST['update'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];
    
    $query="UPDATE students SET name='$name', email='$email', age='$age', gender='$gender', course='$course' WHERE id='$id'";
    $result=mysqli_query($conn, $query);
    if($result){
        echo "<script>alert('Student has been updated successfully!')</script>";
        header('location:students.php');
    }
    else {
        echo "<script> alert ('Something went wrong, student not updated!')</script>";
    }
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
                <input type="text" placeholder="Name" name="name" value="<?php if(isset($row)){echo $row['name'];} ?>">
            </div>

            <div class="input-box">
                <input type="email" placeholder="Email" name="email" value="<?php if(isset($row)){echo $row['email'];} ?>">
            </div>

            <div class="input-box">
                <input type="number" placeholder="Age" name="age" value="<?php if(isset($row)){echo $row['age'];} ?>">
            </div>


            <div class="radio-group">
                <label class="radio">
                    <input type="radio" name="gender" value="male" <?php if($row["gender"]=='male') { echo "checked";} ?>
                    > Male
                    <span></span>
                </label>
                <label class="radio">
                    <input type="radio" name="gender" value="female" <?php if($row["gender"]=='female') { echo "checked";} ?>
                           > Female
                    <span></span>
                </label>
            </div>


            <div class="input-box">
                <select class="" name="course">
                    <option value=""> Select Course </option>
                    
                    <option value="front-end-development"
                            <?php 
                            if($row["course"]=='front-end-development') 
                            { 
                                echo "selected"; 
                            }
                            ?>
                            >Front-End Development </option>
                    
                    <option value="back-end-development"
                            <?php 
                            if($row["course"]=='back-end-development') 
                            { 
                                echo "selected"; 
                            }
                            ?>
                            >Back-End Development</option>
                </select>
            </div>

            <div class="input-btn">
                <input type="submit" name="update" value="Update">
            </div>

        </form>
        
    </div>


    </section> 

    <script src="admin_script.js"></script>
</body>

</html>
