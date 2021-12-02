
<?php
//inisialisasi session
session_start();
include'config.php';
//mengecek username pada session
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';

}else {
  $sql_cek=mysqli_query($conn,"SELECT * FROM users WHERE username='".$_SESSION['username']."' AND aktif='1'") or die(mysqli_error($conn));
  $r_cek=mysqli_fetch_array($sql_cek);
  $jml_data=mysqli_num_rows($sql_cek);
  if ($jml_data>0) {
    $batas = $r_cek['batas'];
    $apip = $r_cek['apikey'];
    $tok = $r_cek['tokenapi'];
  }
}
$nilai1 = $batas;
$nilai2 = '100';

$persen=$nilai1/$nilai2*100;

?>

<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../assets/img/avatar.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard - <?=$_SESSION['username']?></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
</head>

<body class="sidebar-gone">
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li></li>
          </ul>

        </form>

          </li><li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user" aria-expanded="false">
            <img alt="image" src="assets/img/terminal-solid.svg" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block "style="color:black;"><?php if($_SESSION['username'] == null){ echo '';}else{echo $_SESSION['username'];}?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href=<?php if($_SESSION['username'] == null){ echo 'login.php';}else{echo '/';}?> class="dropdown-item has-icon">
                <i class="far fa-user"></i><?php if($_SESSION['username'] == null){ echo 'Login';}else{echo $r_cek['username'];}?>
              </a>
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar" style="overflow: hidden;outline: none;cursor: grab;touch-action: none;border-right: 2px solid;" tabindex="1">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <strong><i class="fas fa-meteor"></i> <span>Dashboard</span></a></strong>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">menu</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Menu</li>
              <li class="active"><a class="nav-link" href="/"><i class="fas fa-meteor"></i> <span>Dashboard</span></a></li>
              <li><a class="nav-link" href="/rest-api"><i class="fas fa-code"></i> <span>Rest Api</span></a></li>
              <li class="nav-item dropdown">
              <li><a class="nav-link" href="/sticker"><i class="fas fa-sticky-note"></i> <span>Stiker Whatsapp Creator</span></a></li>
              <li><a class="nav-link" href="/docs"><i class="fas fa-terminal"></i> <span> API Documentation</span></a></li>
                            <li><a class="nav-link" href="/about"><i class="fab fa-dev"></i> <span>About Dev</span></a></li>
            </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content" style="min-height: 807px;">
        <section class="section">
          <div class="card">
                  <div class="card-header">
                    <h4>Api Key Information</h4>
                  </div>
                  <div class="card-body">
                    <div class="input-group mb-3">
                        <input type="text" id="CopyMe" class="form-control" value=<?php if($_SESSION['username'] == null){ echo '""';}else{echo $r_cek['apikey'];}?> readonly="readonly" "="">
                        <div class="input-group-append">
                          <button onclick="myFunction()" class="btn btn-primary" type="button">Copy</button>
                        </div>
                      </div>
                      <?php
                      if ($_SESSION['username'] == null) {
                        echo '';
                      }elseif ($r_cek['apikey'] == '********') {
                        echo '<div class="alert alert-warning alert-dismissible show fade">
                              <div class="alert-body">
                                                <button class="close" data-dismiss="alert">
                                                  <span>&times;</span>
                                                </button>
                                                Your Api Key Is Locked!<a href=unlock.php?t='.$_SESSION['tokenapi'].'title="Titletext">Click Here</a> To Generate ApiKey
                                              </div>
                                            </div>';
                      }
                       ?>
                    <div class="mb-4">
                      <div class="text-small float-right font-weight-bold text-muted">1000</div>
                      <div class="font-weight-bold mb-1">Limit</div>
                      <div class="progress" data-height="3" style="height: 3px;">
                        <div class="progress-bar" role="progressbar" data-width="100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="10" style="width: 0%;"></div>
                      </div>
                    </div>

                    <div class="mb-4">
                      <div class="text-small float-right font-weight-bold text-muted"><?php echo $batas;?></div>
                      <div class="font-weight-bold mb-1">Limit Tersisa</div>
                      <div class="progress" data-height="3" style="height: 3px;">
                        <div class="progress-bar" role="progressbar" data-width=<?php echo $persen.'%';?> aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>

                      </div>
                    </div>
                    <?php if ($batas == '1') {
                      echo '<div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body">
                                              <button class="close" data-dismiss="alert">
                                                <span>&times;</span>
                                              </button>
                                              Your Api Key Has Reached The Limit!<a href=extra_api.php?t='.$r_cek['tokenapi'].'>Click Here</a> To Get 100 More Limits
                                            </div>
                                          </div>';
                    }else {
                      echo "";
                    }?>
                  </div>
                </div>
              <div class="card mt-4">
                  <form method="post" class="needs-validation" novalidate="">
                    <div class="card-header">
                      <h4>Your information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-5 col-12">
                            <label>Username</label>
                            <input type="text" class="form-control" value=<?php if($_SESSION['username'] == null){ echo '""';}else{echo $_SESSION['username'];}?> readonly="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                          <div class="form-group col-md-5 col-12">
                            <label>Apikey</label>
                            <input type="text" class="form-control" value=<?php if($_SESSION['username'] == null){ echo '""';}else{echo $_SESSION['apikey'];}?> readonly="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-5 col-12">
                            <label>Email</label>
                            <input type="email" class="form-control" value=<?php if($_SESSION['username'] == null){ echo '""';}else{echo $_SESSION['email'];}?> readonly="">
                            <div class="invalid-feedback">
                              Please fill in the email
                            </div>
                          </div>
                          <div class="form-group col-md-5 col-12">
                            <label>Phone</label>
                            <input type="tel" class="form-control" value=<?php if($_SESSION['username'] == null){ echo '""';}else{echo $_SESSION['no_hp'];}?> readonly>
                          </div>
                        </div>


                    </div>
                    <div class="card-footer text-right">

                    </div>
                  </form>
                </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          💻 Reedit By <a href="about.php">Rezzaapr</a>
        </div>
      </footer>
    </div>
  </div>


<script>
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("CopyMe");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert("API KEY COPIED SUCCES");
}
</script>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-1">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-2">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-3">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-4">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-5">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-6">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-1">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-2">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-3">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-4">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-5">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-6">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div>
  <script src="assets/js/custom.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index-0.js"></script>


<div id="ascrail2000" class="nicescroll-rails nicescroll-rails-vr" style="width: 8px; z-index: 892; cursor: default; position: fixed; top: 0px; left: -8px; height: 915px; display: block; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 402px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;" class="nicescroll-cursors"></div></div><div id="ascrail2000-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 8px; z-index: 892; top: 907px; left: -250px; position: fixed; cursor: default; display: none; opacity: 0; width: 242px;"><div style="position: absolute; top: 0px; height: 6px; width: 250px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; left: 0px;" class="nicescroll-cursors"></div></div>
<div id="ascrail2001" class="nicescroll-rails nicescroll-rails-vr" style="width: 8px; z-index: 892; cursor: grab; position: fixed; top: 0px; left: -8px; height: 915px; touch-action: none; opacity: 0; display: block;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 762px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; touch-action: none;" class="nicescroll-cursors"></div></div><div id="ascrail2001-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 8px; z-index: 892; top: 907px; left: -250px; position: fixed; display: none; width: 242px; opacity: 0;"><div style="position: absolute; top: 0px; height: 6px; width: 250px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; left: 0px;" class="nicescroll-cursors"></div></div></body></html>
