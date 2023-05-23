<?php 

include 'connect.php';

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    // echo $delete_id;

    //delete query 

    $delete_data = mysqli_query($con,"delete from `user` where id=$delete_id") or die("query failed");

    if($delete_data){
        header('location:display.php');
    }
    else{
        header('location:display.php');
    }

}


?>