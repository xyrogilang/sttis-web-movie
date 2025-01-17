<?php include "header.php"; ?>


<!-- SATU -->
<div id="wrapper">
  <!-- Sidebar -->
  <ul class="sidebar navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-home"></i>
        <span>Home</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="channels.html">
        <i class="fas fa-fw fa-users"></i>
        <span>Channels</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="single-channel.html">
        <i class="fas fa-fw fa-user-alt"></i>
        <span>Single Channel</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="video-page.html">
        <i class="fas fa-fw fa-video"></i>
        <span>Video Page</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="upload-video.html">
        <i class="fas fa-fw fa-cloud-upload-alt"></i>
        <span>Upload Video</span>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
      </a>
      <div class="dropdown-menu">
        <h6 class="dropdown-header">Login Screens:</h6>
        <a class="dropdown-item" href="login.html">Login</a>
        <a class="dropdown-item" href="register.html">Register</a>
        <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
        <div class="dropdown-divider"></div>
        <h6 class="dropdown-header">Other Pages:</h6>
        <a class="dropdown-item" href="404.html">404 Page</a>
        <a class="dropdown-item" href="blank.html">Blank Page</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="history-page.html">
        <i class="fas fa-fw fa-history"></i>
        <span>History Page</span>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="categories.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-list-alt"></i>
        <span>Categories</span>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="categories.html">Movie</a>
        <a class="dropdown-item" href="categories.html">Music</a>
        <a class="dropdown-item" href="categories.html">Television</a>
      </div>
    </li>
    <li class="nav-item channel-sidebar-list">
      <h6>SUBSCRIPTIONS</h6>
      <ul>
        <li>
          <a href="subscriptions.html">
            <img class="img-fluid" alt="" src="img/s1.png"> Your Life
          </a>
        </li>
        <li>
          <a href="subscriptions.html">
            <img class="img-fluid" alt="" src="img/s2.png"> Unboxing <span class="badge badge-warning">2</span>
          </a>
        </li>
        <li>
          <a href="subscriptions.html">
            <img class="img-fluid" alt="" src="img/s3.png"> Product / Service
          </a>
        </li>
      </ul>
    </li>
  </ul>

  <!-- VIDOE -->
  <div id="content-wrapper">
    <div class="container-fluid pb-0">
      <div class="video-block section-padding">
        <div class="row">
          <div class="col-md-8">
            <div class="single-video-left">
              <div class="single-video">
                <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM video_upload WHERE id='$id' ";
                $res = mysqli_query($conn, $sql);

                if (mysqli_num_rows($res) > 0) {
                  while ($video = mysqli_fetch_assoc($res)) {
                ?>

                    <video src="files/<?= $video['url_video'] ?>" controls width="100%" height="315" ></video>
                    <!-- <iframe width="100%" height="315" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>

                    </iframe> -->

                
              </div>
              <div class="single-video-title box mb-3">
                <h2><a href="#"><?= $video['title'] ?></a></h2>
                <p class="mb-0"><i class="fas fa-eye"></i><?= $video[''] ?></p>
              </div>
              <div class="single-video-author box mb-3">
                <div class="float-right"><button class="btn btn-danger" type="button">Subscribe <strong>1.4M</strong></button> <button class="btn btn btn-outline-danger" type="button"><i class="fas fa-bell"></i></button></div>
                <img class="img-fluid" src="img/s4.png" alt="">
                <p><a href="#"><strong>Osahan Channel</strong></a> <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></span></p>
                <small>Published on Aug 10, 2018</small>
              </div>
              <div class="single-video-info-content box mb-3">
                <h6>Cast:</h6>
                <p><?= $video['cast'] ?></p>
                <h6>Category :</h6>
                <p><?= $video['gendre'] ?></p>
                <h6>About :</h6>
                <p><?= $video['about'] ?></p>
                <?php
                  }
                } else {
                  echo "<h1>Empty</h1>";
                }
                ?>
                
              </div>
            </div>
          </div>





          <div class="col-md-4">
            <div class="single-video-right">
              <div class="row">
                <div class="col-md-12">

                  <div class="main-title">
                    <div class="btn-group float-right right-action">
                      <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                      </div>
                    </div>
                    <h6>Up Next</h6>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="video-card video-card-list">
                    <div class="video-card-image">
                      <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                      <a href="#"><img class="img-fluid" src="img/v1.png" alt=""></a>
                      <div class="time">3:50</div>
                    </div>
                    <div class="video-card-body">
                      <div class="btn-group float-right right-action">
                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                        </div>
                      </div>
                      <div class="video-title">
                        <a href="#">Here are many variati of passages of Lorem</a>
                      </div>
                      <div class="video-page text-success">
                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                      </div>
                      <div class="video-view">
                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                      </div>
                    </div>
                  </div>
                  <div class="video-card video-card-list">
                    <div class="video-card-image">
                      <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                      <a href="#"><img class="img-fluid" src="img/v2.png" alt=""></a>
                      <div class="time">3:50</div>
                    </div>
                    <div class="video-card-body">
                      <div class="btn-group float-right right-action">
                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                        </div>
                      </div>
                      <div class="video-title">
                        <a href="#">Duis aute irure dolor in reprehenderit in.</a>
                      </div>
                      <div class="video-page text-success">
                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                      </div>
                      <div class="video-view">
                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                      </div>
                    </div>
                  </div>
                  <div class="video-card video-card-list">
                    <div class="video-card-image">
                      <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                      <a href="#"><img class="img-fluid" src="img/v3.png" alt=""></a>
                      <div class="time">3:50</div>
                    </div>
                    <div class="video-card-body">
                      <div class="btn-group float-right right-action">
                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                        </div>
                      </div>
                      <div class="video-title">
                        <a href="#">Culpa qui officia deserunt mollit anim</a>
                      </div>
                      <div class="video-page text-success">
                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                      </div>
                      <div class="video-view">
                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                      </div>
                    </div>
                  </div>
                  <div class="video-card video-card-list">
                    <div class="video-card-image">
                      <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                      <a href="#"><img class="img-fluid" src="img/v4.png" alt=""></a>
                      <div class="time">3:50</div>
                    </div>
                    <div class="video-card-body">
                      <div class="btn-group float-right right-action">
                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                        </div>
                      </div>
                      <div class="video-title">
                        <a href="#">Deserunt mollit anim id est laborum.</a>
                      </div>
                      <div class="video-page text-success">
                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                      </div>
                      <div class="video-view">
                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                      </div>
                    </div>
                  </div>
                  <div class="video-card video-card-list">
                    <div class="video-card-image">
                      <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                      <a href="#"><img class="img-fluid" src="img/v5.png" alt=""></a>
                      <div class="time">3:50</div>
                    </div>
                    <div class="video-card-body">
                      <div class="btn-group float-right right-action">
                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                        </div>
                      </div>
                      <div class="video-title">
                        <a href="#">Exercitation ullamco laboris nisi ut.</a>
                      </div>
                      <div class="video-page text-success">
                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                      </div>
                      <div class="video-view">
                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                      </div>
                    </div>
                  </div>
                  <div class="video-card video-card-list">
                    <div class="video-card-image">
                      <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                      <a href="#"><img class="img-fluid" src="img/v6.png" alt=""></a>
                      <div class="time">3:50</div>
                    </div>
                    <div class="video-card-body">
                      <div class="btn-group float-right right-action">
                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                        </div>
                      </div>
                      <div class="video-title">
                        <a href="#">There are many variations of passages of Lorem</a>
                      </div>
                      <div class="video-page text-success">
                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                      </div>
                      <div class="video-view">
                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                      </div>
                    </div>
                  </div>
                  <div class="adblock mt-0">
                    <div class="img">
                      Google AdSense<br>
                      336 x 280
                    </div>
                  </div>
                  <div class="video-card video-card-list">
                    <div class="video-card-image">
                      <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                      <a href="#"><img class="img-fluid" src="img/v2.png" alt=""></a>
                      <div class="time">3:50</div>
                    </div>
                    <div class="video-card-body">
                      <div class="btn-group float-right right-action">
                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                        </div>
                      </div>
                      <div class="video-title">
                        <a href="#">Duis aute irure dolor in reprehenderit in.</a>
                      </div>
                      <div class="video-page text-success">
                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                      </div>
                      <div class="video-view">
                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
    <!-- Sticky Footer -->
    <footer class="sticky-footer">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-6 col-sm-6">
            <p class="mt-1 mb-0"><strong class="text-dark">Vidoe</strong>.
              <small class="mt-0 mb-0"><a class="text-primary" target="_blank" href="https://templatespoint.net/">TemplatesPoint</a>
              </small>
            </p>
          </div>
          <div class="col-lg-6 col-sm-6 text-right">
            <div class="app">
              <a href="#"><img alt="" src="img/google.png"></a>
              <a href="#"><img alt="" src="img/apple.png"></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- /.content-wrapper -->
  <!-- VIDOE -->
  <!-- SATU -->



</div>

<!-- /#wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
      </div>
    </div>
  </div>
</div>

<?php include "footer.php"; ?>