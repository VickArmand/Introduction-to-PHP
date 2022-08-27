<?php
include 'config.php';
$stmt='SELECT * FROM users';
$stmt=$conn->query($stmt);

// var_dump($row);
// while($row){
//     echo $row['id'];
// }
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
    <table>
        <thead>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Action</th>
        </thead>
       
     <?php
     if($stmt->rowCount()>0){
        ?>
        <tbody>
            <?php
       $row=$stmt->fetchAll(PDO::FETCH_ASSOC);
       foreach($row as $item){
        ?>
       
        <td><?php echo $item['firstname'];?></td>
        <td><?php echo $item['lastname'];?></td>
        <td><?php echo $item['gender'];?></td>
        <td><a class="btn btn-info" href="edit.php?id=<?php echo $item['id']?>">Edit</a>&nbsp;<a class="btn btn-danger"
        href="delete.php?id=<?php echo $item['id']?>">Delete</a>
        </td>
     
     <?php
       }
    //    OR
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <td><?php echo $row['firstname'];?></td>
                <td><?php echo $row['lastname'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><a class="btn btn-info" href="edit.php?id=<?php echo $row['id']?>">Edit</a>&nbsp;<a class="btn btn-danger"
                href="delete.php?id=<?php echo $row['id']?>">Delete</a>
                </td>
            <?php
       }
       ?>
       </tbody>
       <?php
     }
     else
        {
           echo "No records"; 
        }
     ?>       
    </table>
</body>
</html>