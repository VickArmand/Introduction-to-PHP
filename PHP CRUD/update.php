<?php
include 'config.php';
$email=$_POST['email'];
$gender=$_POST['gender'];
try{
    $stmt='UPDATE users SET gender=:gender,email=:email';
    $stmt=$conn->prepare($stmt);
    $stmt->bindParam(':gender',$gender);
    $stmt->bindParam(':email',$email);
    $stmt->execute();
    echo "Update success";

}catch(PDOException $ex){
    echo 'Update failure'.$ex->getMessage(); 
}
?>