<?php
include 'config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    try{
        $stmt='DELETE FROM users WHERE id=:id';
        $stmt=$conn->prepare($stmt);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        echo "Delete success";
    }catch(PDOException $ex){
       echo 'Delete failure'.$ex->getMessage();
    }

}

?>