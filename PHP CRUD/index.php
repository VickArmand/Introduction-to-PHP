
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
    <form action="create.php" method="post" style="display: flex; flex-direction:column; align-items:flex-start;">
    <fieldset>
    First Name: <input type="text" name="firstname" id="" value="<?php echo $_POST['firstname']??null; ?>">
       <div class="error">
        <?php
        echo $errors['firstname']??null;
        ?>
       </div>
       Last Name: <input type="text" name="lastname" id="" value="<?php echo $_POST['lastname']??null; ?>">
       <div class="error">
        <?php
        echo $errors['lastname']??null;
        ?>
       </div>
        Email: <input type="email" name="email" id="" placeholder="Email Address" value="<?php echo $_POST['email']??null; ?>">
        <div class="error">
        <?php echo $errors['email']??null; ?>
       </div>
        Password: <input type="password" name="password" id="">
        <div class="error">
        <?php echo $errors['password']??null; ?>
       </div>
        
Gender: <select name="gender" id="" value="<?php echo $_POST['gender']??null; ?>">
    <option value=""></option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
</select>
<div class="error">
        <?php echo $errors['gender']??null; ?>
       </div>

<button type="submit" name="submit">REGISTER</button>
    </fieldset>
  
    </form>
</body>
</html>