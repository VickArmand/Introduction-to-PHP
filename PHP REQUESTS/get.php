<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    <input type="text" name="name" id="">
    <input type="number" name="age" id="">
    <button type="submit">SUBMIT</button>
    </form>
</body>
</html>
<?php
// GET request sends encoded user information appended to the page request
// Has a restriction of sending up to 1024 charaters only
// Less secure since personal info appears on the url on submission
// Cannot be used in sending images and binary documents
// Data sent by GET method can be accessed by the QUERY_STRING environmental variable
if(isset($_GET['name'])&&isset($_GET['age'])){
    echo "Hi ".$_GET['name']."<br> Your age is ".$_GET['age'];
    exit();
}
?>