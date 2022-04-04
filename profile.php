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
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
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
    <div class="middle">
        <div class="atas">
            <h3>Profil Pribadi</h3>
        </div>
        <div class="bawah">
            <div class="isi_data">
                <table style="width:300px; height:200px;">
                    <tr>
                        <td>Nama Depan</td>
                        <td><p><?php echo "<b>".$row['nama_depan']."</b>";?></p></td>
                    <tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td><?php echo "<b>".$row['tempat_lahir']."</b>";?></td>
                    <tr>
                        <td>Warga Negara</td>
                        <td><?php echo "<b>".$row['warga_negara']."</b>";?></td>
                    <tr>
                    <tr>
                        <td>Alamat</td>
                        <td><?php echo "<b>".$row['alamat']."</b>";?></td>
                    <tr>
                </table>
            </div>
            <div class="isi_data">
                <table style="width:450px; height:200px;">
                    <tr>
                        <td>Nama Tengah</td>
                        <td><?php echo "<b>".$row['nama_tengah']."</b>";?></td>
                    <tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><?php echo "<b>".$row['tanggal_lahir']."</b>";?></td>
                    <tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo "<b>".$row['email']."</b>";?></td>
                    <tr>
                    <tr>
                        <td>Kode Pos</td>
                        <td><?php echo "<b>".$row['kode_pos']."</b>";?></td>
                    <tr>
                </table>
            </div>
            <div class="isi_data">
                <table style="width:450px; height:200px;">
                    <tr>
                        <td>Nama Belakang</td>
                        <td><?php echo "<b>".$row['nama_belakang']."</b>";?></td>
                    <tr>
                    <tr>
                        <td>NIK</td>
                        <td><?php echo "<b>".$row['nik']."</b>";?></td>
                    <tr>
                    <tr>
                        <td>No HP</td>
                        <td><?php echo "<b>".$row['no_hp']."</b>";?></td>
                    <tr>
                    <tr>
                        <td>Foto Profil</td>
                        <td><?php echo "<b>".$row['foto_profil']."</b>";?></td>
                        <!-- <td><img src="./<?= $_SESSION['berkas'] ?>" style="max-height:150px"></td> -->
                    <tr>
                </table>
            </div>    
        </div>
    </div>
    <div class="editprofile">
        <form action="editProfile.php"  method="post">
            <input type="submit" name="edit" value="Edit Profile">
        </form>
    </div>
</body>
</html>
                