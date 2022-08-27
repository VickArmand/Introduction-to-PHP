<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>LOGIN FORM</h2>
    <form action="signin.php" method="POST" style="display: flex; flex-direction:column; align-items:center">
       Username: <input type="text" name="username" id="">
       Password: <input type="password" name="password" id="">
        <button type="submit" name="login">LOGIN</button>
        <div class="error">
            <span style="color: red;">
                <?php if(isset($_GET['error'])){ echo $_GET['error']; } ?>
            </span>
            <span style="color: green;">
            <?php if(isset($_GET['success'])){ echo $_GET['success']; } ?>
            </span>
        </div>
        <span>Don't have an account yet? <a href="signup.php">Click Here</a></span>
    </form>
</body>
</html>