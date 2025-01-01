<?php

include 'config.php';

error_reporting(0);

session_start();

if(isset($_SESSION['fullname']))
{
    header("Location: index.php");
}

if (isset($_POST['submit']))
{
    $id = ($_POST['id']);
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = md5 ($_POST['password']);
    $cpassword = md5 ($_POST['cpassword']);
    $length=($id);
    
    if (strlen($_POST["password"]) >='8') 
    {
    if ($password == $cpassword)
    {
        $sql = "SELECT * FROM signupdata where email='$email'";
        $result = mysqli_query($conn, $sql);
        
            if (!$result->num_rows>0)
        {
            $sql="INSERT INTO signupdata(id, fullname, email, password) VALUES('$id', '$fullname', '$email', '$password')";
            
            $result= mysqli_query($conn, $sql);
                if ($result)
            {
                echo "<script>alert('Congrats, you have been registered successfully!')</script>";
                $id = "";
                $fullname = "";
                $email ="";
                $_POST['password']= "";
                $_POST['cpassword']= "";
            } 
                else
                {
                echo "<script> alert ('Oops, something went wrong!')</script>";
                }
        }
            else  //email exists
            {
               echo "<script> alert('Sorry this email already exists!')</script>";
            }
    
    }
    
    else
    {
        echo "<script> alert('Oops, the passwords do not match!')</script>";
    }
}
    else{
    echo "<script> alert('Password should have 8 or more characters!')</script>";
}
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title> Sign Up - DIA </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        ::-webkit-input-placeholder {
            /* Edge */
            color: #c9c9c9;
            font-weight: 700;
        }

        :-ms-input-placeholder {
            /* Internet Explorer */
            color: #c9c9c9;
            font-weight: 700;
        }

        ::placeholder {
            color: #c9c9c9;
            font-weight: 700;
        }

    </style>

</head>

<body>
    <div class="container">
        <form action="" method="post" class="login-email">
            <p class="login-text"> Welcome - Sign Up Below </p>

            <div class="input-group">
                <input type="number" placeholder="ID" name="id" value="<?php echo $id;?>" required>
            </div>

            <div class="input-group">
                <input type="text" placeholder="Full name" name="fullname" value="<?php echo $fullname;?>" required>
            </div>

            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email;?>" required>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $password;?>" required>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Confirm password" name="cpassword" value="<?php echo $cpassword;?>" required>
            </div>

            <div class="input-group">
                <button name="submit" class="btn"> Sign Up </button>
            </div>

            <p class="login-signup-text"> You already have an account? <a href="index.php"> Log in here </a></p>

        </form>
    </div>
</body>

</html>
