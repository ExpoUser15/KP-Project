<?php 
session_start();

    include "../../config/config.php";

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password =$_POST['password'];
        $val = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password'");
        if(mysqli_num_rows($val) == 1){
            $dt = mysqli_fetch_assoc($val);
            $_SESSION['username'] = $dt['username'];
            echo "<script>
                    location.href = '../index.php';
                </script>";
        }else{
            echo "<script>
                    alert('Username atau Password salah!');
                    location.href = '../login.php';
                </script>";
        }
    }
?>