<?php
    session_start();
    include("config.php");
    $str_query = "select*from user where username = '".$_SESSION['username_sesi']."'";
    $query = mysqli_query($connection, $str_query);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="regis.css">
</head>
<body>
<div class="top">
        <h3>Edit Profile</h3>
    </div>
        <form action="prosesEdit.php" method="post" enctype="multipart/form-data">
            <div class="formulir">    
                <div class="tabel1">
                    <table style="height:200px">
                        <tr>
                            <td>Nama Depan</td>
                            <td><input type="text" name="nama_depan" value="<?php echo $row['nama_depan'];?>"></td>
                        <tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td><input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir'];?>"></td>
                        <tr>
                        <tr>
                            <td>Warga Negara</td>
                            <td><input type="text" name="warga_negara" value="<?php echo $row['warga_negara'];?>"></td>
                        <tr>
                        <tr>
                            <td>Alamat</td>
                            <td><textarea name="alamat" id="" cols="30" rows="10" value="<?php echo $row['alamat'];?>"></textarea></td>
                        <tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username" value="<?php echo $row['username'];?>" readonly></td>
                        <tr>
                    </table>
                </div>
                <div class="tabel1">
                    <table style="height:200px">
                        <tr>
                            <td>Nama Tengah</td>
                            <td><input type="text" name="nama_tengah" value="<?php echo $row['nama_tengah'];?>"></td>
                        <tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td><input type="date" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir'];?>"></td>
                        <tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>
                        <tr>
                        <tr>
                            <td>Kode Pos</td>
                            <td><input type="text" name="kode_pos" value="<?php echo $row['kode_pos'];?>"></td>
                        <tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" value="<?php echo $row['password'];?>" readonly></td>
                        <tr>
                    </table>
                </div>
                <div class="tabel1">
                    <table style="height:200px">
                        <tr>
                            <td>Nama Belakang</td>
                            <td><input type="text" name="nama_belakang"/></td>
                        <tr>
                        <tr>
                            <td>NIK</td>
                            <td><input type="text" name="nik"/></td>
                        <tr>
                        <tr>
                            <td>No HP</td>
                            <td><input type="text" name="no_hp"/></td>
                        <tr>
                        <tr>
                            <td>Foto Profil</td>
                            <td><input type="file" name="berkas" accept="image/*" required/></td>
                        <tr>
                    </table>
                </div>
            </div>
                <div class="button">
                    <div class="kembali_but">
                        <a href="profile.php">Kembali</a>
                    </div>
                    <div class="register">
                        <input type="submit" name="edit" value="Edit Profile" id="regis_but"/>
                    </div>
                </div>
        </form>
    </div>
</body>
</html>