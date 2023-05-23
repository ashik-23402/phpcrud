<?php
include 'connect.php';

//update query
if(isset($_POST['update-btn'])){
    $data_id = $_POST['updateid'];
    $username = $_POST['name'];
    $usermail = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];


    $sql = "update `user` set name='$username',mail='$usermail',mobile='$number',address='$address' 
    where id=$data_id";

    $result = mysqli_query($con,$sql);

    if($result){
        // echo "update successfully";
        header('location:display.php');
    }
    else{
        echo die "error";
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
    <h1>Update data </h1>
    <a href="display.php">view</a>

    <?php
        if(isset($_GET['edit'])){

            $edit_id = $_GET['edit'];
            // echo $edit_id;

            $get_data = mysqli_query($con,"select * from `user` where id = $edit_id");
            if(mysqli_num_rows($get_data)>0){
                $fetch_data = mysqli_fetch_assoc($get_data); ?>


                    <form action="" method = "post">
                        <input type="hidden" name="updateid" value = <?php echo $fetch_data['id']?>>
                        <input type="text" name="name" value=<?php echo $fetch_data['name'] ?>>
                        <input type="email" name="email" value=<?php echo $fetch_data['mail'] ?>  >
                        <input type="number" name="number" value=<?php echo $fetch_data['mobile'] ?>>
                        <input type="text" name="address"  value=<?php echo $fetch_data['address'] ?>>
                        <input type="submit" value="Update" name="update-btn">
                    </form>


             <?php   
            }

        }
    ?>

  



</body>
</html>