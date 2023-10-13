<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center" style="height: 100vh; width:100%">
            <div class="col-md-6">
                <div class="card border-0 shadow rounded">
                    <div class="card-header">
                        <strong>Login</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <form action="" id="loginForm">
                            <input 
                                class="form-control"
                                type="text"
                                id="username"
                                placeholder="Username"
                                autofocus
                                autocomplete="off">
                            <input 
                                class="form-control mt-3"
                                type="password"
                                id="password"
                                placeholder="Password"
                                autofocus
                                autocomplete="off">
                            <button type="button" class="btn btn-primary mt-3" onclick="login()">Login</button>
                            <a href="#" class="btn btn-outline-secondary mt-3" onclick="switchForms('registerForm')">Register</a>
                        </form>
                        <form action="registrasi.php" method="post" id="registerForm" style="display: none;">
                            <div class="card-header mb-3">
                                <strong>Registrasi Akun Baru</strong>
                            </div>
                            <input 
                                class="form-control"
                                type="text"
                                id="regUsername"
                                name="reg_username"
                                placeholder="Username register"
                                autofocus
                                autocomplete="off">
                            <input 
                                class="form-control mt-3"
                                type="password"
                                id="regPassword"
                                name="reg_password"
                                placeholder="Password register"
                                autofocus
                                autocomplete="off">
                            <button type="submit" class="btn btn-primary mt-3" onclick="showAlert()">Register</button>
                            <a href="#" class="btn btn-outline-danger mt-3" onclick="switchForms('loginForm')">Cancel</a>
                        </form>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var users = [];

        function login() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            var userFound = false;

            for(var i = 0; i < users.length; i++ ){
                if(users[i].username === username && users[i].password === password){
                    userFound = true;
                    break;
                }
            }
            if(userFound) {
                console.log("Login Berhasil");
                document.getElementById("loginForm").reset();

                window.location.href ="dashboard.html";
            } else {
                console.log("Username dan Password salah...")
            }
        }
        function register() {
            var username = document.getElementById("regUsername").value;
            var password = document.getElementById("regPassword").value;
            
            if (username && password) {
                // Tambahkan pengguna ke array
                users.push({ username: username, password: password });
                console.log("Pengguna berhasil terdaftar");
                document.getElementById("registerForm").reset();
                switchForms(); // Beralih kembali ke formulir login
            } else {
                console.log("Form harus terisi semua");
            }
        }

        function switchForms() {
            var loginForm = document.getElementById("loginForm");
            var registerForm = document.getElementById("registerForm");

            if (loginForm.style.display === "none") {
                loginForm.style.display = "block";
                registerForm.style.display = "none";
            } else {
                loginForm.style.display = "none";
                registerForm.style.display = "block";
            }
        }
    </script>
    <script>
        function showAlert(){
            swal.fire({
                title: 'Registrasi Berhasil',
                text: 'Anda telah berhasil mendaftar',
                icon: 'success',
                confirmButtonText: "Ok",
            }).then((result) => {
                if(result.isConfirmed){
                    window.location 
                }
            });
        }
    </script>
  </body>
</html>