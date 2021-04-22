<!DOCTYPE html>
<html lang="en">
   <head>
      <title>BLOG &mdash; BLOG</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="public/css/css.css" rel="stylesheet">
      <link rel="stylesheet" href="public/css/style.css">
      <link rel="stylesheet" href="public/css/bootstrap.min.css">
      <link rel="stylesheet" href="public/css/jquery-ui.css">
      <link rel="stylesheet" href="public/css/owl.carousel.min.css">
      <link rel="stylesheet" href="public/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="public/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="public/css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="public/css/bootstrap-datepicker.css">
      <link rel="stylesheet" href="public/css/flaticon.css">
      <link rel="stylesheet" href="public/css/aos.css">
      <link href="public/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="public/css/style_1.css">
   </head>
   <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
      <div class="site-wrap">
         <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
               <div class="site-mobile-menu-close mt-3">
                  <span class="icon-close2 js-menu-toggle"></span>
               </div>
            </div>
            <div class="site-mobile-menu-body"></div>
         </div>
         <div class="header-top">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-12 col-lg-6 d-flex">
                     <a href="index.php" class="site-logo">
                     My Blog
                     </a>
                     <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
                  </div>
                  <div class="col-12 col-lg-6 ml-auto d-flex">
                     <div class="ml-md-auto top-social d-none d-lg-inline-block">
                        <a href="https://www.facebook.com/profile.php?id=100026797158206" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                        <a href="https://www.facebook.com/profile.php?id=100026797158206" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                        <a href="https://www.facebook.com/profile.php?id=100026797158206" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
                     </div>
                     <form action="#" class="search-form d-inline-block">
                        <div class="d-flex">
                           <input type="email" class="form-control" placeholder="Search...">
                           <button type="submit" class="btn btn-secondary"><span class="icon-search"></span></button>
                        </div>
                     </form>
                  </div>
                  <div class="col-6 d-block d-lg-none text-right"></div>
               </div>
            </div>
            <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-7">
                  <div class="d-flex align-items-center">
                     <div class="mr-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                           <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                              <li class="active">
                                 <a href="index.php" class="nav-link text-left">Home</a>
                              </li>
                              <li>
                                 <a href="index.php?admin=admin&mod=post&act=list&name='Tin Công Nghệ'" class="nav-link text-left">Tin Công Nghệ</a>
                              </li>
                              <li>
                                 <a href="index.php?admin=admin&mod=post&act=list2&name='Tin Thể Thao'" class="nav-link text-left">Tin Thể Thao</a>
                              </li>
                              <li>
                                 <a href="index.php?admin=admin&mod=post&act=list3&name='Tin Thời Sự'" class="nav-link text-left">Tin Quốc Tế</a>
                              </li>
                              <li><a href="#" class="nav-link text-left">Contact</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <div class="col-lg-5">
                  <?php if(isset($_COOKIE['tc'])) {?>
                     <div class="alert alert-success" role="alert">
                           <?php echo $_COOKIE['tc']; ?>
                     </div>
                  <?php } ?>

                  <?php if(isset($_COOKIE['tb'])) {?>
                     <div class="alert alert-danger" role="alert">
                           <?php echo $_COOKIE['tb']; ?>
                     </div>
                  <?php } ?>
               </div>
                  </div><!-- End row -->
               </div><!-- End container -->
            </div>
         </div>
         <div class="site-section py-0">
            <div class="owl-carousel hero-slide owl-style">
               <?php 
                  foreach ($twoPosts as $key => $value) {
                ?>
                     <div class="site-section">
                  <div class="container">
                     <div class="half-post-entry d-block d-lg-flex bg-light">
                        <div class="img-bg" style="background-image: url(<?= $value['thumbnail'] ?>)"></div>
                        <div class="contents">
                           <span class="caption">Editor's Pick</span>
                           <h2><a href="index.php?admin=admin&mod=post&act=detail&id=<?= $value['id'] ?>">
                              <?= $value['title'] ?>
                           </a></h2>
                           <p class="mb-3">
                               <?= $value['description'] ?>
                           </p>
                           <div class="post-meta">
                              <span class="d-block"><a href="#">
                                 <?= $value['name'] ?>
                              </a> in <a href="#?"><?= $value['name1'] ?></a></span>
                              <span class="date-read"><?= $value['creat-at'] ?>
                              <span class="icon-star2"></span></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div><!-- End site-section -->
               <?php } ?>
            </div>
         </div>
         <div class="site-section">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8">
                     <div class="row">
                        <div class="col-12">
                           <div class="section-title">
                              <h2>TIN TỨC 24/7</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="post-entry-1">
                              <a href="post-single.html"><img src="<?= $fourPosts[0]['thumbnail'] ?>" alt="Image" class="img-fluid"></a>
                              <h2><a href="index.php?admin=admin&mod=post&act=detail&id=<?= $fourPosts[0]['id'] ?>"><?= $fourPosts[0]['title'] ?></a></h2>
                              <p><?= $fourPosts[0]['description'] ?></p>
                              <div class="post-meta">
                                 <span class="d-block"><a href="#"><?= $fourPosts[0]['name'] ?></a> in <a href="#"><?= $fourPosts[0]['name1'] ?></a></span>
                                 <span class="date-read"> <?= $fourPosts[0]['creat-at'] ?> <span class="icon-star2"></span></span>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <?php for ($i=1; $i < 4; $i++) { 
                           ?>
                              <div class="post-entry-2 d-flex bg-light">
                                 <div class="thumbnail" style="background-image: url(<?= $fourPosts[$i]['thumbnail'] ?>)"></div>
                                 <div class="contents">
                                 <h2><a href="index.php?admin=admin&mod=post&act=detail&id=<?= $fourPosts[$i]['id'] ?>"><?= $fourPosts[$i]['title'] ?></a></h2>
                                 <div class="post-meta">
                                    <span class="d-block"><a href="#"><?= $fourPosts[$i]['name'] ?></a> in <a href="#"><?= $fourPosts[$i]['name1'] ?></a></span>
                                    <span class="date-read"><?= $fourPosts[$i]['creat-at'] ?><span class="icon-star2"></span></span>
                                 </div>
                              </div>
                           </div>
                           <?php } ?> 
                        </div><!-- End col-6 -->
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="section-title">
                        <h2>Đọc nhiều nhất *</h2>
                     </div>
                     <?php for ($i=0;$i<4;$i++) {
                      ?>
                     <div class="trend-entry d-flex">
                        <div class="number align-self-start"><?= '0'.$i+1 ?></div>
                        <div class="trend-contents">
                           <h2><a href="index.php?admin=admin&mod=post&act=detail&id=<?= $read[$i]['id'] ?>"> <?= $read[$i]['title'] ?> </a></h2>
                           <div class="post-meta">
                              <span class="d-block"><a href="#"><?= $read[$i]['name'] ?> </a> in <a href="#"><?= $read[$i]['name1'] ?></a></span>
                              <span class="date-read"><?= $read[$i]['creat-at'] ?> <span class="icon-star2"></span></span>
                           </div>
                        </div>
                     </div>
                  <?php } ?>
                     <p>
                        <a href="#" class="more">See All Trends <span class="icon-keyboard_arrow_right"></span></a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="py-0">
            <?php foreach ($thethao as $key => $value) {
            ?>
            <div class="container">
               <div class="half-post-entry d-block d-lg-flex bg-light">
                  <div class="img-bg" style="background-image: url(<?= $value['thumbnail'] ?>)"></div>
                  <div class="contents">
                     <span class="caption"> <?= $value['name1'] ?> </span>
                     <h2><a href="index.php?admin=admin&mod=post&act=detail&id=<?= $value['id'] ?>"><?= $value['title'] ?></a></h2>
                     <p class="mb-3">
                        <?= $value['description'] ?>
                     </p>
                     <div class="post-meta">
                        <span class="d-block"><a href="#"><?= $value['name'] ?></a> in <a href="#"><?= $value['name1'] ?></a></span>
                        <span class="date-read"><?= $value['creat-at'] ?><span class="icon-star2"></span></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php } ?>
         <div class="site-section">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="section-title">
                        <h2>TIN THỂ THAO</h2>
                     </div>
                     <?php foreach ($ttquocte as $key => $value) {
                      ?>
                     <div class="post-entry-2 d-flex">
                        <div class="thumbnail" style="background-image: url(<?= $value['thumbnail'] ?>)"></div>
                        <div class="contents">
                           <h2><a href="index.php?admin=admin&mod=post&act=detail&id=<?= $value['id'] ?>"><?= $value['title'] ?></a></h2>
                           <p class="mb-3"><?= $value['description'] ?></p>
                           <div class="post-meta">
                              <span class="d-block"><a href="#"><?= $value['name'] ?></a> in <a href="#"><?= $value['name1'] ?></a></span>
                              <span class="date-read"><?= $value['creat-at'] ?><span class="icon-star2"></span></span>
                           </div>
                        </div>
                     </div>
                  <?php } ?>
                  </div>
                  <div class="col-lg-6">
                     <div class="section-title">
                        <h2>TIN NGOÀI NƯỚC</h2>
                     </div>
                     <?php foreach ($tinqt as $key => $value) {
                     ?>
                     <div class="post-entry-2 d-flex">
                        <div class="thumbnail" style="background-image: url(<?= $value['thumbnail'] ?>)"></div>
                        <div class="contents">
                           <h2><a href="index.php?admin=admin&mod=post&act=detail&id=<?= $value['id'] ?>"><?= $value['title'] ?></a></h2>
                           <p class="mb-3"><?= $value['description'] ?></p>
                           <div class="post-meta">
                              <span class="d-block"><a href="#"><?= $value['name'] ?></a> in <a href="#"><?= $value['name1'] ?></a></span>
                              <span class="date-read"><?= $value['creat-at'] ?><span class="icon-star2"></span></span>
                           </div>
                        </div>
                     </div>
                     <?php } ?>
                  
                  <div class="row">
                  <div class="col-lg-6">
                     <ul class="custom-pagination list-unstyled">
                        <li><a href="#">1</a></li>
                        <li class="active">2</li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                     </ul>
                  </div>
               </div>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="site-section subscribe bg-light">
            <div class="container">
               <form action="index.php?admin=admin&mod=email&act=store" method="POST" class="row align-items-center" role="form" enctype="multipart/form-data">
                  <div class="col-md-5 mr-auto">
                     <h2>Newsletter Subcribe</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis aspernatur ut at quae omnis pariatur obcaecati possimus nisi ea iste!</p>
                  </div>
                  <div class="col-md-6 ml-auto">
                     <div class="d-flex">
                        <input type="email" class="form-control" placeholder="Enter your email" name="email">
                        <button type="submit" class="btn btn-secondary"><span class="icon-paper-plane"></span></button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="copyright">
                        <p>
                           Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="loader" class="show fullscreen">
         <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/>
         </svg>
      </div>
      <script src="public/js/jquery-3.3.1.min.js"></script>
      <script src="public/js/jquery-migrate-3.0.1.min.js"></script>
      <script src="public/js/jquery-ui.js"></script>
      <script src="public/js/popper.min.js"></script>
      <script src="public/js/bootstrap.min.js"></script>
      <script src="public/js/owl.carousel.min.js"></script>
      <script src="public/js/jquery.stellar.min.js"></script>
      <script src="public/js/jquery.countdown.min.js"></script>
      <script src="public/js/bootstrap-datepicker.min.js"></script>
      <script src="public/js/jquery.easing.1.3.js"></script>
      <script src="public/js/aos.js"></script>
      <script src="public/js/jquery.fancybox.min.js"></script>
      <script src="public/js/jquery.sticky.js"></script>
      <script src="public/js/jquery.mb.YTPlayer.min.js"></script>
      <script src="public/js/main.js"></script>
      <script async src="public/js_1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-23581568-13');
      </script>
   </body>
</html>