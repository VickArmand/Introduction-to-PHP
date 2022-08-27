<?php
include 'config.php';
session_start();
if(isset($_POST['login'])){
    $username=htmlspecialchars(trim($_POST['username']));
    $password=trim($_POST['password']);
    if(empty($username)||empty($password)){
        header('location:index.php?error= Please fill in all fields');
        exit();
    }
    $stmt='SELECT * FROM systemusers WHERE username=:username LIMIT 1';
    $stmt=$conn->prepare($stmt);
    $stmt->bindParam(':username',$username);
    $stmt->execute();
    if($stmt->rowCount()!==1){
        echo "User does not exist";
    }
    else{
        $row=$stmt->fetch(PDO::FETCH_OBJ);
        if(password_verify($password,$row->password)){
            $_SESSION['loggedinuser']=[
                'id'=>$row->id,
                'username'=>$row->username
            ];
            var_dump($_SESSION['loggedinuser']);
            header('location:home.php');
            exit();
        }
        else{
            header('location:index.php?error= Incorrect username or password');
            exit();
        }
    }
    $conn=null;
}


?>