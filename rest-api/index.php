<?php
session_start();
?>
<html lang="en"><head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Rest Api</title>

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
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>

        </form>


        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user" aria-expanded="false">
          <img alt="image" src="../assets/img/avatar.png" class="rounded-circle mr-1">
          <div class="d-sm-none d-lg-inline-block"style="color:black;"><?php if($_SESSION['username'] == null){ echo '';}else{echo $_SESSION['username'];}?></div></a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-title">Logged in 5 min ago</div>
            <a href=<?php if($_SESSION['username'] == null){ echo '../login';}else{echo '/';}?> class="dropdown-item has-icon">
              <i class="far fa-user"></i><?php if($_SESSION['username'] == null){ echo 'login';}else{echo $_SESSION['username'];}?>              </a>
            <div class="dropdown-divider"></div>
            <a href="../logout.php" class="dropdown-item has-icon text-danger">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </div>
        </li>

      </nav>
      <div class="main-sidebar" style="overflow: hidden;outline: none;cursor: grab;touch-action: none;border-right: 2px solid;" tabindex="1">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a class="nav-link" href="/"><i class="fas fa-code"></i> <span>Rest Api</span></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">menu</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Menu</li>
              <li><a class="nav-link" href="/"><i class="fas fa-meteor"></i> <span>Dashboard</span></a></li>
              <li class="active"><a class="nav-link" href="/rest-api"><i class="fas fa-code"></i> <span>Rest Api</span></a></li>
              <li class="nav-item dropdown">
              <li><a class="nav-link" href="/sticker"><i class="fas fa-sticky-note"></i> <span>Stiker Whatsapp Creator</span></a></li>
              <li><a class="nav-link" href="/docs"><i class="fas fa-terminal"></i> <span> API Documentation</span></a></li>
                            <li class=><a class="nav-link" href="/about"><i class="fab fa-dev"></i> <span>About Dev</span></a></li>
            </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content" style="min-height: 548px;">
        <section class="section">
  <div class="card">
                <div class="card-header">
                  <h4>List API</h4>
                  <div class="card-header-action">
                    <span class="b"></span>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tbody><tr>
                        <th>API name</th>
                        <th>required</th>
                        <th>status</th>
                        <th>method</th>
                        <th>action</th>
                      </tr>
                      <tr>
                        <td>instagram Profile Information</td>
                        <td>username,apikey</td>
                        <td><div class="badge badge-success">Online</div></td>
                        <td>GET</td>
                        <td>
                          <a href=<?php if($_SESSION['username'] == null){ echo 'ig_profile.php?username=rzapr&apikey=test';}else{echo 'ig_profile.php?username=rzapr&apikey='.$_SESSION['apikey'];}?> target="_blank" class="btn btn-primary">Test</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Instagram Image</td>
                        <td>image_id,apikey</td>
                        <td><div class="badge badge-success">Online</div></td>
                        <td>GET</td>
                        <td>
                          <a href=<?php if($_SESSION['username'] == null){ echo 'ig_foto.php?image_id=CWkCizqBhbf&apikey=test';}else{echo 'ig_foto.php?image_id=CWkCizqBhbf&apikey='.$_SESSION['apikey'];}?> target="_blank" class="btn btn-primary">Test</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Instagram Video</td>
                        <td>video_id,apikey</td>
                        <td><div class="badge badge-success">Online</div></td>
                        <td>GET</td>
                        <td>
                          <a href=<?php if($_SESSION['username'] == null){ echo 'ig_video.php?video_id=CWso5AplE2q&apikey=test';}else{echo 'ig_video.php?video_id=CWso5AplE2q&apikey='.$_SESSION['apikey'];}?> target="_blank" class="btn btn-primary">Test</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Text To Speech</td>
                        <td>text,apikey</td>
                        <td><div class="badge badge-success">Online</div></td>
                        <td>GET</td>
                        <td>
                          <a href=<?php if($_SESSION['username'] == null){ echo 'tts.php?text=rzapr&apikey=test';}else{echo 'tts.php?text=rzapr&apikey='.$_SESSION['apikey'];}?> target="_blank" class="btn btn-primary">Test</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Youtube To Mp3</td>
                        <td>id,apikey</td>
                        <td><div class="badge badge-success">Online</div></td>
                        <td>GET</td>
                        <td>
                        <a href=<?php if($_SESSION['username'] == null){ echo 'ytmp3.php?url=https://www.youtube.com/watch?v=i06UL-8AMi4&apikey=test';}else{echo 'ytmp3.php?url=https://www.youtube.com/watch?v=i06UL-8AMi4&apikey='.$_SESSION['apikey'];}?> target="_blank" class="btn btn-primary">Test</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Writing Book Bot</td>
                        <td>text,apikey</td>
                        <td><div class="badge badge-success">Online</div></td>
                        <td>GET</td>
                        <td>
                          <a href=<?php if($_SESSION['username'] == null){ echo 'write_bot.php?text=test&apikey=test';}else{echo 'write_bot.php?text=halo&apikey='.$_SESSION['apikey'];}?> target="_blank" class="btn btn-primary">Test</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Lyric Song</td>
                        <td>artist &title song,apikey</td>
                        <td><div class="badge badge-success">Online</div></td>
                        <td>GET</td>
                        <td>
                                                    <a href=<?php if($_SESSION['username'] == null){ echo 'lyric.php?search=test&apikey=test';}else{echo 'lyric.php?search=wonderwall&apikey='.$_SESSION['apikey'];}?> target="_blank" class="btn btn-primary">Test</a>
                        </td>
                      </tr>
                    </tbody></table>
                  </div>
                </div>
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

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="../node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-1">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-2">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-3">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-4">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-5">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-6">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-1">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-2">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-3">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-4">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-5">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div><div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-6">       <div class="modal-dialog modal-md" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Are You Sure?</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">           This action can not be undone. Do you want to continue?</div>           <div class="modal-footer">           <button type="button" class="btn btn-danger btn-shadow" id="">Yes</button><button type="button" class="btn btn-secondary" id="">Cancel</button></div>         </div>       </div>    </div>
  <script src="../assets/js/custom.js"></script>
  <!-- Page Specific JS File -->
  <script src="../assets/js/page/index-0.js"></script>


<div id="ascrail2000" class="nicescroll-rails nicescroll-rails-vr" style="width: 8px; z-index: 892; cursor: default; position: fixed; top: 0px; left: -8px; height: 915px; display: block; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 402px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;" class="nicescroll-cursors"></div></div><div id="ascrail2000-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 8px; z-index: 892; top: 907px; left: -250px; position: fixed; cursor: default; display: none; opacity: 0; width: 242px;"><div style="position: absolute; top: 0px; height: 6px; width: 250px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; left: 0px;" class="nicescroll-cursors"></div></div>
<div id="ascrail2001" class="nicescroll-rails nicescroll-rails-vr" style="width: 8px; z-index: 892; cursor: grab; position: fixed; top: 0px; left: -8px; height: 915px; touch-action: none; opacity: 0; display: block;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 762px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; touch-action: none;" class="nicescroll-cursors"></div></div><div id="ascrail2001-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 8px; z-index: 892; top: 907px; left: -250px; position: fixed; display: none; width: 242px; opacity: 0;"><div style="position: absolute; top: 0px; height: 6px; width: 250px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; left: 0px;" class="nicescroll-cursors"></div></div>
<div id="ascrail2002" class="nicescroll-rails nicescroll-rails-vr" style="width: 8px; z-index: 892; cursor: default; position: fixed; top: 0px; left: -8px; height: 402px; display: none; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 615px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;" class="nicescroll-cursors"></div></div><div id="ascrail2002-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 8px; z-index: 892; top: 394px; left: -250px; position: fixed; cursor: default; display: none; width: 242px; opacity: 0;"><div style="position: absolute; top: 0px; height: 6px; width: 250px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; left: 0px;" class="nicescroll-cursors"></div></div>
<div id="ascrail2003" class="nicescroll-rails nicescroll-rails-vr" style="width: 8px; z-index: 892; cursor: grab; position: fixed; top: 0px; left: -8px; height: 915px; touch-action: none; display: none;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; touch-action: none;" class="nicescroll-cursors"></div></div><div id="ascrail2003-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 8px; z-index: 892; top: 907px; left: -250px; position: fixed; display: none;"><div style="position: absolute; top: 0px; height: 6px; width: 0px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;" class="nicescroll-cursors"></div></div>
<div id="ascrail2004" class="nicescroll-rails nicescroll-rails-vr" style="width: 8px; z-index: 892; cursor: grab; position: fixed; top: 0px; left: -8px; height: 915px; touch-action: none; display: none;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; touch-action: none;" class="nicescroll-cursors"></div></div><div id="ascrail2004-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 8px; z-index: 892; top: 907px; left: -250px; position: fixed; display: none;"><div style="position: absolute; top: 0px; height: 6px; width: 0px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;" class="nicescroll-cursors"></div></div>
<div id="ascrail2005" class="nicescroll-rails nicescroll-rails-vr" style="width: 8px; z-index: 892; cursor: default; position: fixed; top: 0px; left: -8px; height: 656px; display: block; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 615px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;" class="nicescroll-cursors"></div></div><div id="ascrail2005-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 8px; z-index: 892; top: 648px; left: -250px; position: fixed; cursor: default; display: none; width: 242px; opacity: 0;"><div style="position: absolute; top: 0px; height: 6px; width: 250px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; left: 0px;" class="nicescroll-cursors"></div></div></body></html>
