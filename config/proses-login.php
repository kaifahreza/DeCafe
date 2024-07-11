<?php
session_start();
include 'config/database.php';
    $username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "" ;
    $password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password']) ) : "" ;

    if (!empty($_POST['submit_validate'])) {
        
        $query = mysqli_query($db, "SELECT * FROM user WHERE username = '$username' && password = '$password'");

        $hasil = mysqli_fetch_array($query);
        if ($hasil) {
            $_SESSION['username_decade'] = $username;
            header("location:../home");
        } else { ?>
            <script>
                alert('Username/Password Salah ya');
                window.location = '../login.php';
            </script>
        <?php
        }
    }
?>