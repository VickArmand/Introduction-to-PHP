<?php
$username='root';
$servername='localhost';
$password='';
$dbname='phprestapi';
$response=array();
$conn=new PDO('mysql:host='.$servername.';dbname='.$dbname.';',$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(!$conn){
    echo "Connection failed";
}
$stmt='SELECT * FROM users';
    $stmt=$conn->query($stmt);
    $stmt->execute();
    $rows=$stmt->fetchAll(PDO::FETCH_OBJ);
    if($stmt->rowCount()==0){
        $response=[
            'no records found'
        ];
    }
    $x=0;
    foreach($rows as $row){
       
       $response[$x]=[
        'id'=>$row->id,
        'name'=>$row->name,
        'age'=>$row->age,
        'email'=>$row->email
       ];
       $x++;
    }
    echo json_encode($response, JSON_PRETTY_PRINT);
?>
