<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="header">
        <div class="judul">
            <p>Aplikasi Pengelolaan Keuangan</p>
        </div>
        <div class="home_icon">
            <a href="home.php">Home</a>
        </div>
        <div class="profile_icon">
            <a href="profile.php">Profile</a>
        </div>
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="tengah">
        <h3> <?php session_start(); echo "Halo ".$_SESSION['nama_depan_regis']." ".$_SESSION['nama_tengah_regis']." ".$_SESSION['nama_belakang_regis'].", Selamat Datang di Aplikasi Keuangan";?> </h3>
    </div>
            
</body>
</html>