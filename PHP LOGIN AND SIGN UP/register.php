<?php
include 'config.php';
if(isset($_POST['register'])){
    $email=htmlspecialchars(trim($_POST['email']));
    $username=htmlspecialchars(trim($_POST['username']));
    $password=trim($_POST['password']);
    $confirmpwd=trim($_POST['confirmpwd']);
if(empty($email)||empty($username)||empty($password)||empty($confirmpwd)){
    header('location:signup.php?error= Please fill in all fields');
    exit();
}
if($password!==$confirmpwd){
    header('location:signup.php?error= Password and confirm password must match');
    exit();
}
if(strlen($password)<=7){
    header('location:signup.php?error= Password must be more than 8 characters');
    exit();
}
if(!filter_var($email,FILTER_SANITIZE_EMAIL)){
    header('location:signup.php?error= Incorrect email format');
    exit();
}
if(!preg_match("/^[a-zA-Z ]*$/",$username) )
{
    header('location:signup.php?error= Username field must consist of letters and whitespace only');
    exit();
}
$stmt='SELECT * FROM systemusers WHERE email=:email';
$stmt=$conn->prepare($stmt);
$stmt->bindParam(':email',$email);
$stmt->execute();
if($stmt->rowCount()>0){
    header('location:signup.php?error= User with the email already exists');
    exit();
}
else{
    try{
        $password=password_hash($password,PASSWORD_DEFAULT);
        $stmt='INSERT INTO systemusers(username,email,password) VALUES(:username,:email,:password)';
        $stmt=$conn->prepare($stmt);
        $stmt->bindParam(':username',$username);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':password',$password);
        $stmt->execute();
        header('location:signup.php?success= Registration Success');
        exit();
    }catch(PDOException $ex){
        echo "Registration failure due to ". $ex->getMessage();    }
    
}
$conn=null;
}

?>