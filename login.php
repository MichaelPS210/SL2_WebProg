<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="top">
        <h3>Login</h3>
    </div>
    <div class="form">
        <form action="prosesLogin.php" method="post">
        <table class="isi">
            <tr>
                <td>Username</td>
                <td><input type="text" name="usernameLogin"/></td>
            <tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="passwordLogin"/></td>
            <tr>
        </table>
            <div class="button">
                <div class="login_but">
                    <input type="submit" name="login" value="Login" id="login_button"/>
                </div>
                <div class="kembali_but">
                    <a href="welcome.php">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>