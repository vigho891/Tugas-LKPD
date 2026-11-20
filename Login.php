<!DOCTYPE html>
<html>
<head>
    <title>Sistem Login RPL</title>
</head>
<body style="font-family: Arial; text-align: center; margin-top: 100px;">
    <h2>Silahkan Login</h2>
    
    <form action="cek_login.php" method="POST">
        <label>Username : </label>
        <input type="text" name="user" required> <br><br>
        
        <label>Password : </label>
        <input type="password" name="pass" required> <br><br>
        
        <button type="submit">Masuk</button>
    </form>
</body>
</html>