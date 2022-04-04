<?php
    include("config.php");
    session_start();
    if(isset($_POST['edit'])){
        $namaFile = $_FILES['berkas']['name'];
        $tmp_name = $_FILES['berkas']['tmp_name'];
        $dirUpload = "diupload/";
        $diupload = move_uploaded_file($tmp_name, $dirUpload.$namaFile);
        $str_query = "update user set nama_depan='".$_POST['nama_depan']."', tempat_lahir='".$_POST['tempat_lahir']."', nama_tengah='".$_POST['nama_tengah']."', nama_belakang='".$_POST['nama_belakang']."', tanggal_lahir ='".$_POST['tanggal_lahir']."', nik='".$_POST['nik']."', alamat='".$_POST['alamat']."', email='".$_POST['email']."', no_hp='".$_POST['no_hp']."', kode_pos='".$_POST['kode_pos']."', password='".$_POST['password']."', foto_profil ='".$namaFile."' where username = '".$_SESSION['username_sesi']."' ";
        $query = mysqli_query($connection, $str_query);
        
        if($query){
            header('location:profile.php');
        }
        else{
            echo "gagal".mysqli_error($connection);
        }
    }
?>