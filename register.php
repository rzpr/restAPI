<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="assets/img/logo.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/selectric/public/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body class="sidebar-gone">
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <?php

                include 'config.php';

                if (isset($_SESSION['username'])) {
                    header("Location: index.php");
                }

                if (isset($_POST['submit'])) {
                    $username = $_POST['Username'];
                    $password = md5($_POST['Password']);
                    $Nama=$_POST['Username'];
                    $email = $_POST['email'];
                    $wa = $_POST['wa'];
                    $x = 0;
                    $y = 35;
                   $Strings = '0123456789abcdefghijklmnopqrstuvwxyz';
                   $token =  substr(str_shuffle($Strings), $x, $y);
                   $tokenapi =  substr(str_shuffle($Strings), $x, 23);
                   $api = substr(str_shuffle($Strings), $x, 20);
                    $sql_cek=mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");
                    $r_cek=mysqli_num_rows($sql_cek);
                    if ($r_cek>0) {
                      echo '<div class="alert alert-warning">username anda sudah pernah terdaftar!</div>';
                    }else{
                      $insert=mysqli_query($conn,"INSERT INTO users(id_users,username,password,email,no_hp,rapi,apikey,batas,token,aktif,tokenapi,aktifapi)VALUES ('".$api."','".$username."','".$password."','".$email."','".$wa."','".$api."','********','100','".$token."','0','".$tokenapi."','0')");
                      $regapi=mysqli_query($conn,"INSERT INTO api(api)VALUES ('".$api."')");
                      //include("mail.php");

                      if ($insert) {
                        echo '<div class="alert alert-success">
                        Pendaftaran anda berhasil, silahkan cek email anda untuk aktifasi.
                        <a href="login.php">Login</a>
                        </div>';
                      }
                    }
                  }
                ?>
                <form method="POST" action="">
                  <div class="form-group">
                                        <label>Username</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fas fa-user"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control phone-number" name="Username" >
                                        </div>
                                      </div>
                  <div class="form-group">
                                        <label>Whatsapp Number (Start With Country Code)</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fab fa-whatsapp-square"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control phone-number" name="wa" >
                                        </div>
                                      </div>
                  <div class="form-group">
                                        <label>Email</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fas fa-envelope"></i>
                                            </div>
                                          </div>
                                          <input type="email" class="form-control phone-number" name="email" >
                                        </div>
                                      </div>
                                      <div class="form-group">
                                                            <label>Password</label>
                                                            <div class="input-group">
                                                              <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                  <i class="fas fa-key"></i>
                                                                </div>
                                                              </div>
                                                              <input type="text" class="form-control phone-number" name="Password" >
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                                                <label>Confirmation Password</label>
                                                                                <div class="input-group">
                                                                                  <div class="input-group-prepend">
                                                                                    <div class="input-group-text">
                                                                                      <i class="fas fa-key"></i>
                                                                                    </div>
                                                                                  </div>
                                                                                  <input type="text" class="form-control phone-number" name="repassword" >
                                                                                </div>
                                                                              </div>
                  <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright © Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="../node_modules/selectric/public/jquery.selectric.min.js"></script>

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="../assets/js/page/auth-register.js"></script>


</body></html>
