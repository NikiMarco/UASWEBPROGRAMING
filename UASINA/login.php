<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #00D99A;">
    <div class=container style="text-align: center; background-color:white; width: 400px; margin-left:500px;">
    <img src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/26c9324913c021677768c36975d635ef.png" style="width: 150px;">
    <h1>Halaman Login</h1>
        <form action="proseslogin.php" method="POST">
        <div class="formlogin">
                <input type="text" name="us" placeholder="Username" required> <br>
                <input type="text" name ="ps" placeholder="Password" required> <br>
                <button type="submit" class="btn btn-warning" title="Login">
                        Login
                    </button>
                <a href="register.php">Register</a>
            </div>
        </form>
    </div>
</body>
</html>