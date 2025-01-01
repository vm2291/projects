<?php

include 'config.php';

error_reporting(0);

session_start();

if(isset($_SESSION['fullname']))
{
    header("Location: dashboard.php");
}

if (isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $sql = "SELECT * FROM signupdata WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    
    if($result->num_rows>0)
    {
        $row= mysqli_fetch_assoc($result);
        
        $_SESSION['fullname'] = $row['fullname'];
        header("Location: dashboard.php");
    }
    else
    {
        echo "<script> alert('The email or password is wrong! Please try again.')</script>"; 
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title> Digital Innovations Academy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
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

            <p class="login-text"> Digital Innovations Academy </p>

            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email;?>" required>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $password;?>" required>
            </div>

            <div class="input-group">
                <button name="submit" class="btn"> Log in </button>
            </div>

            <p class="login-signup-text">
                You don't have an account? <a href="signup.php"> Sign up here </a> </p>


        </form>

    </div>
</body>

</html>
