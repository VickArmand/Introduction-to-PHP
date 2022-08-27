<?php
include 'config.php';

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
    <form action="update.php" method="POST" >
    <fieldset style="display: flex; flex-direction:column; align-items:flex-start;">
    <h2>Personal Information </h2>
    <?php
   if(isset($_GET['id'])){
    $id=htmlspecialchars(trim($_GET['id']));
    $stmt='SELECT gender,email FROM users WHERE id=:id';
    $stmt=$conn->prepare($stmt);
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    $userdetails=$stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($userdetails as $userdetail){
        ?>
        Email: <input type="email" name="email" id="" value="<?php echo $userdetail['email'] ?>">
       
       <div>
       Gender:
        <input type="radio" name="gender" value="Male" <?php if($userdetail['gender']=='Male'){ echo "checked"; }
            ?>> Male
        <input type="radio" name="gender" value="Female" <?php if($userdetail['gender']=='Female'){ echo "checked"; }?>> Female 
       
       </div>  <button type="submit">UPDATE</button>
        <?php
    }
}
    ?>
    
    </fieldset>   
    </form>
</body>
</html>
