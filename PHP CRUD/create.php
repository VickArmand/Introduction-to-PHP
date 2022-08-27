<?php
include 'config.php';
function test_input($data){
    $data=htmlspecialchars(stripslashes(trim($data)));
    return $data;
}
if(isset($_POST['submit'])){
    $first_name=test_input($_POST['firstname']);
    $last_name=test_input($_POST['lastname']);
    $email=test_input($_POST['email']);
    $password=test_input($_POST['password']);
    $gender=test_input($_POST['gender']);
    $errors=[];
   
    if(empty($first_name)){
        $errors['firstname']='This field is required';
        header('location:index.php');
    }
    if(empty($email)){
        $errors['email']='This field is required';
        header('location:index.php');
    }
    if(empty($last_name)){
        $errors['lastname']='This field is required';
        header('location:index.php');
    }
    if(empty($password)){
        $errors['password']='This field is required';
        header('location:index.php');
    }
    if(empty($gender)){
        $errors['gender']='This field is required';
        header('location:index.php');
    }
    
    if(!preg_match("/^[a-zA-Z-' ]*$/",$first_name)){
        $errors['firstname']='This field should support letters and whitespace only';
        header('location:index.php');
    }
    if(!preg_match("/^[a-zA-Z-' ]*$/",$last_name)){
        $errors['lastname']='This field should support letters and whitespace only';
        header('location:index.php');
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email']='Incorrect mail format';
        header('location:index.php');
    }
if(empty($errors)){
    try{
        $stmt='INSERT INTO users(firstname,lastname,email,password,gender) VALUES(:firstname,:lastname,:email,:password,:gender)';
        $stmt=$conn->prepare($stmt);
        $stmt->bindParam(':firstname',$first_name);
        $stmt->bindParam(':lastname',$last_name);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':password',$password);
        $stmt->bindParam(':gender',$gender);
        $stmt->execute();
        echo "Insert success";
    }catch(PDOException $ex){
        echo "Insertion failure".$ex->getMessage();
    }
    
}
$conn=null;

}
?>