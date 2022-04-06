<?php
    if(isset($_POST['login'])){
        $ctr = 0;
        include("config.php");
        $str_query = "select * from user";
        $query = mysqli_query($connection, $str_query);
        while($row = mysqli_fetch_array($query)){
            if(($row['username'] == $_POST['usernameLogin']) && ($row['password'] == $_POST['passwordLogin'])){
                session_start();
                $username = $_POST['usernameLogin'];
                $_SESSION["username_sesi"] = $username;
                header('location:temp.php');
            }
            else{
                $ctr = $ctr+1;
            }
        } 
        if($ctr!=0){
            header('location:login.php');
        }
    }

     // if(isset($_SESSION)){
        //     if(($_POST['usernameLogin'] == $_SESSION['username_regis']) && ($_POST['passwordLogin'] == $_SESSION['password1_regis'])){
        //         echo "<h1> Login Berhasil </h1>";
        //         echo "Klik link dibawah ini untuk lanjut";
        //         echo "<br/>";
        //         echo "<a href = 'home.php'> Next </a>";  
        //     }
        //     else{
        //         echo "<h1> Login Gagal </h1>";
        //         echo "Klik link dibawah ini untuk kembali";
        //         echo "<br/>";
        //         echo "<a href = 'login.php'> Kembali </a>";  
        //     }
        // }
?>

    
