<?php
include 'config.php';
session_start();
$sq_cek=mysqli_query($conn,"SELECT * FROM users WHERE username='".$_SESSION['username']."' AND aktif='1'") or die(mysqli_error($conn));
$r_cek=mysqli_fetch_array($sq_cek);
$qry=mysqli_num_rows($sq_cek);

if ($qry>0) {
  $batas = $r_cek['batas'];
  $apip = $r_cek['apikey'];
  $tok = $r_cek['tokenapi'];
}

?>
<html lang="en"><head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body class="sidebar-gone">
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="page-error">
          <div class="page-inner">
          <?php
     include "config.php";
     $token=$_GET['t'];
     $api = $_SESSION['rapi'];
     $sql_cek=mysqli_query($conn,"SELECT * FROM users WHERE tokenapi='".$token."' and aktifapi='0'");
     $jml_data=mysqli_num_rows($sql_cek);
     if ($jml_data>0) {
         $x = 0;
         $y = 35;
        $Strings = '0123456789abcdefghijklmnopqrstuvwxyz';
        $token =  substr(str_shuffle($Strings), $x, $y);
         mysqli_query($conn,"UPDATE users SET aktifapi='0' WHERE id_users ='$apip'");
         mysqli_query($conn,"UPDATE users SET tokenapi='$token' WHERE id_users='$apip'");
         mysqli_query($conn,"UPDATE users SET batas='100' WHERE id_users='$apip'");
         echo '<h2>Succes</h2>
         <div class="page-description">
            Limit Request +100
         </div>';
     }else{
                //data tidak di temukan

                 echo '<h2>error</h2>
                 <div class="page-description">
                    invalid token
                 </div>';
               }
?>

            <div class="page-search">
              <form>
                <div class="form-group floating-addon floating-addon-not-append">

                </div>
              </form>
              <div class="mt-3">
                <a href="/">Back to Home</a>
              </div>
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

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  <!-- Page Specific JS File -->


</body></html>
