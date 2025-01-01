<?php

session_start();
if(!isset($_SESSION['fullname']))
{
    header('Location: index.php');
    exit();
}

include 'config.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM students WHERE id='$id'";
    $result=mysqli_query($conn, $query);
    if ($result) {
    header('location:students.php');
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


</head>


<body>

    <?php include 'admin_header.php';?>
    <section class="students">

        <h1 class="heading"> Students 
       <div class="insert"> <a href="insert.php" class="insert" name="insertt"> Insert </a> </div>
     </h1>
        

        <table>

            <thead>
                <th> ID </th>
                <th> Full Name </th>
                <th> Email </th>
                <th> Age </th>
                <th> Gender </th>
                <th> Course </th>
                <th> Update </th>
                <th> Delete </th>
            </thead>

            <tbody>
                <?php
                require 'config.php';
                $query="SELECT * FROM students";
                $result=mysqli_query($conn, $query);
                
                if(mysqli_num_rows($result)>0){
                   while ($row=mysqli_fetch_assoc($result)) {
                        ?>
                <tr>
                    <td> <?php echo $row ['id'] ?> </td>
                    <td> <?php echo $row ['name'] ?></td>
                    <td> <?php echo $row ['email'] ?> </td>
                    <td> <?php echo $row ['age'] ?> </td>
                    <td> <?php echo $row ['gender'] ?></td>
                    <td> <?php echo $row ['course'] ?></td>
                    <td> <a href="update.php?id=<?php echo $row ['id'] ?>"> Update </a></td>
                    <td> <a href="students.php?id=<?php echo $row ['id'] ?>" onclick="return confirm('Do you want to delete this student?');"> Delete </a></td>
                </tr>
                <?php
                   }
     
                }
                
                ?>
            </tbody>

        </table>
        
    </section>



    <script src="admin_script.js"></script>
</body>

</html>
