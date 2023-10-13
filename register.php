<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["reg_username"]) && isset($_POST["reg_password"])){

        $username = $_POST["reg_username"];
        $username = $_POST["reg_password"];

        $encrypt_password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (username, password) VALUES ('$username, $encrypt_password')" ;

        if($koneksi->query($query) === TRUE ) {
           echo "<script>
                        swal.fire({
                            title 'Registrasi Berhasil',
                            text 'Anda Telah Berhasil Mendaftar',
                            icon 'success',
                            confirmButtonText 'Ok'
                        }).then((result)) => {
                            if(result.isConfirmed){
                                window.location.href = 'index.php';
                            }
                        }
                        </script>";
        } else {
            echo "Error" . $query . "<br>" . $koneksi->error;
            
        }
    }
}