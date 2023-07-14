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
    <h1>Halaman Register</h1>
        <form action="prosesregister.php" method="POST">
        <div class="formregister">
                <input type="text" name="us" placeholder="Username" required> <br>
                <input type="text" name ="ps" placeholder="Password" required> <br>
                <label>Role</label>
                <input type="radio" name="rl" value="Jual"/>
                    <label>Penjual</label>
                <input type="radio" name="rl" value="Beli"/>
                    <label>Pembeli</label> <br><br>
                <button type="submit" class="btn btn-warning" title="Register">
                        Register
                    </button>
            </div>
        </form>
    </div>
</body>
</html>