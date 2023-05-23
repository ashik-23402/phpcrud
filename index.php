<?php include 'connect.php';

//insert data

if(isset($_POST['submit'])){
    // echo "sucesss";

    $username = $_POST['name'];
    $usermail = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];

    // echo $username;

    //insertt query

    $sql = "insert into `user` (name,mail,mobile,address)
    values('$username','$usermail',' $number','$address') ";

    $result = mysqli_query($con,$sql);

    if($result){
        // echo "data inserted successfully";
        header('location:display.php');
    }
    else{
        echo die("data not inserted");
    }
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>PHP CRUD</h1>
    <a href="display.php">View data</a>

    <form action="" method = "post">

        <input type="text" name="name" placeholder="enter name">
        <input type="email" name="email" placeholder="enter email">
        <input type="number" name="number" placeholder="enter number">
        <input type="text" name="address" placeholder="enter address">
        <input type="submit" value="Submit" name="submit">
    </form>
    

</body>
</html>