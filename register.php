<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="regis.css">
</head>
<body>
    <div class="top">
        <h3>Register</h3>
    </div>
        <form action="prosesRegistrasi.php" method="post" enctype="multipart/form-data">
            <div class="formulir">    
                <div class="tabel1">
                    <table style="height:200px">
                        <tr>
                            <td>Nama Depan</td>
                            <td><input type="text" name="nama_depan"/></td>
                        <tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td><input type="text" name="tempat_lahir"/></td>
                        <tr>
                        <tr>
                            <td>Warga Negara</td>
                            <td><input type="text" name="warga_negara"/></td>
                        <tr>
                        <tr>
                            <td>Alamat</td>
                            <td><textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
                        <tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username"/></td>
                        <tr>
                    </table>
                </div>
                <div class="tabel1">
                    <table style="height:200px">
                        <tr>
                            <td>Nama Tengah</td>
                            <td><input type="text" name="nama_tengah"/></td>
                        <tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td><input type="date" name="tanggal_lahir"/></td>
                        <tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email"/></td>
                        <tr>
                        <tr>
                            <td>Kode Pos</td>
                            <td><input type="text" name="kode_pos"/></td>
                        <tr>
                        <tr>
                            <td>Password 1</td>
                            <td><input type="password" name="password1"/></td>
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
                        <tr>
                            <td>Password 2</td>
                            <td><input type="password" name="password2"/></td>
                        <tr>
                    </table>
                </div>
            </div>
                <div class="button">
                    <div class="kembali_but">
                        <a href="welcome.php">Kembali</a>
                    </div>
                    <div class="register">
                        <input type="submit" name="register" value="Register" id="regis_but"/>
                    </div>
                </div>
        </form>
    </div>
</body>
</html>