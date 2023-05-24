<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div action="" class="form-container">
        <p>Note: Admin account is only for company CEO's </p>
        <form action="" method="post">
            <h3>Register now</h3>
            <input type="text" name="name" required placeholder="enter your name">
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="password" name="cpassword" required placeholder="confirm your password">
            <select name="user_type" >
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <input type="submit" value="register now" class="form-btn">
            <p>already have an account? <a href="login_form.php">login now</a> </p>
        </form>
    </div>
    
</body>
</html>