<?php
include 'connect.php';

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
    <h1>display data</h1>
    <a href="index.php">Back</a>

    

    <?php
    
    $display_data = mysqli_query($con,"select * from `user`");
    $num = 1;
    $number_rows = mysqli_num_rows($display_data);

    if($number_rows>0){

        echo"
        <table>
        <thead>
        <th>si no</th>
        <th>user name </th>
        <th>email</th>
        <th>mobile number</th>
        <th>address</th>
        <th>operation</th>
        </thead>

        <tbody>";

       while( $row = mysqli_fetch_assoc($display_data)){ ?>

            
            <tr>
                <td><?php echo $num ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['mail'] ?></td>
                <td><?php echo $row['mobile'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td>
                    <a href="update.php?edit=<?php echo $row['id'] ?>">edit</a>
                    <a href="delete.php?delete=<?php echo $row['id'] ?>"
                    onclick = "return confirm('Are you sure want to delete ?');">delete</a>
                </td>
            </tr>

        
        <?php
        $num++;
       }
     
    }  else{
        echo "<div>no data </div>";
       }

    
    ?>
        </tbody>
    </table>

</body>
</html>