<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_PHP_SELF?>" method="post">
    <input type="text" name="name" id="">
    <input type="number" name="age" id="">
    <button type="submit">SUBMIT</button>
    </form>
</body>
</html>
<?php
// POST method doesnt have ny restrictions on data size and it is secure
// Allows sending of images and documents
// Sends info via HTTP headers
if(isset($_REQUEST['name'])&& isset($_REQUEST['age'])){
   
        echo "Hi ".$_REQUEST['name']."<br> Your age is ".$_REQUEST['age'];
        exit();
   
}
?>