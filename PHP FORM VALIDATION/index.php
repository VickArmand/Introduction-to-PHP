<?php
// ?? - is a null coalescing operator which is used to replace the ternary operator in conjunction with isset()
// It returns the first operator if it exists otherwise it returns the second operand
if($_SERVER['REQUEST_METHOD']=='POST'){
    $fullname=test_input($_POST['name']);
    $email=test_input($_POST['email']);
    $number=test_input($_POST['number']);
    $comment=test_input($_POST['comment']);
    $gender=test_input($_POST['gender']);
    $age=test_input($_POST['age']);
    $website=test_input($_POST['website']);
    $errors=[];
    if(empty($fullname)){
        $errors['name']='This field is required';
    }
    if(empty($email)){
        $errors['email']='This field is required';
    }
    if(empty($age)){
        $errors['age']='This field is required';
    }
    if(empty($number)){
        $errors['number']='This field is required';
    }
    if(empty($gender)){
        $errors['gender']='This field is required';
    }
    if(empty($website)){
        $errors['website']='This field is required';
    }
    
    if(!preg_match("/^[a-zA-Z-' ]*$/",$fullname)){
        $errors['name']='This field should support letters and whitespace only';
    }
    if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
        $errors['website']='Enter a valid URL';
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email']='Incorrect mail format';
    }
}
function test_input($data){
    $data=htmlspecialchars(stripslashes(trim($data)));
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        .error{
            color:#ff0000;
        }
    </style>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" style="display: flex; flex-direction:column; align-items:flex-start;">
       Full Names: <input type="text" name="name" id="" value="<?php echo $_POST['name']??null; ?>">
       <div class="error">
        <?php
        // foreach($errors as $errorfield=>$errorvalue)
        // {
            
        //     if($errorfield=='name'){
        //         echo $errorvalue;
        //         break;
        //     }
           
        // }
        echo $errors['name']??null;
        ?>
       </div>
        Email: <input type="email" name="email" id="" placeholder="Email Address" value="<?php echo $_POST['email']??null; ?>">
        <div class="error">
        <?php echo $errors['email']??null; ?>
       </div>
        Number(optional): <input type="number" name="number" id="" value="<?php echo $_POST['number']??null; ?>">
        <div class="error">
        <?php echo $errors['number']??null; ?>
       </div>
        Age: <input type="number" name="age" id="" value="<?php echo $_POST['age']??null; ?>">
        <div class="error">
        <?php echo $errors['age']??null; ?>
       </div>
Comment: <textarea name="comment" id="" cols="20" rows="5" value="<?php echo $_POST['comment']??null; ?>"></textarea>
Gender: <select name="gender" id="" value="<?php echo $_POST['gender']??null; ?>">
    <option value=""></option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
</select>
<div class="error">
        <?php echo $errors['gender']??null; ?>
       </div>
Website: <input type="text" name="website" id="" value="<?php echo $_POST['website']??null; ?>">
<div class="error">
        <?php echo $errors['website']??null; ?>
       </div>
<button type="submit">REGISTER</button>
    </form>
</body>
</html>