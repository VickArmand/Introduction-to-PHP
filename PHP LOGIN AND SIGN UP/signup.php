<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>REGISTRATION FORM</h2>
    <form action="register.php" method="post" style="display: flex; flex-direction:column; align-items:center">
        Username: <input type="text" name="username" id="">
        Email: <input type="email" name="email" id="">
        Password: <input type="password" name="password" id="">
        Confirm Password: <input type="password" name="confirmpwd" id="">
        <button type="submit" name="register">REGISTER</button>
        <div class="error">
            <span style="color: red;">
                <?php if(isset($_GET['error'])){ echo $_GET['error']; } ?>
            </span>
            <span style="color: green;">
            <?php if(isset($_GET['success'])){ echo $_GET['success']; } ?>
            </span>
        </div>
        <span>Already have an account? <a href="index.php">Login</a></span>

    </form>
</body>
</html>