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
                        <a href="#" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
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
                  <div class="d-flex align-items-center">
                     <div class="mr-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                           <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                              <li class="active">
                                 <a href="index.php" class="nav-link text-left">Home</a>
                              </li>
                              <?php 
                                 foreach ($listtttt as $key => $value) {
                               ?>
                              <li class="active">
                                    <a href="index.php?admin=admin&mod=post&act=list&id=<?= $value['categories_id'] ?>" class="nav-link text-left"><?= $value['name1'] ?></a>
                              </li>
                            <?php } ?>
                              
                              <li><a href="contact.html" class="nav-link text-left">Contact</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>   
         <!-- MIDDLE -->
         <div class="container-fluid" style="margin-top: 10%;">
            <div class="container">
               <div class="row">
                  <?php foreach ($techPost as $key => $value) { ?>
                     <div class="col-lg-6 mb-5">
                        <img src="<?= $value['thumbnail'] ?>" width='100%' height='auto' alt="">
                     </div>
                     <div class="col-lg-6 mb-5">
                        <h2><a href="index.php?admin=admin&mod=post&act=detail&id=<?= $value['id'] ?>"><?= $value['title'] ?></a></h2>
                        <h5><?= $value['description'] ?></h5>
                        <div class="post-meta">
                           <span class="d-block"><a href="#"><?= $value['name'] ?></a> in <a href="#"><?= $value['name1'] ?></a></span>
                           <span class="date-read"><?= $value['creat-at'] ?><span class="icon-star2"></span></span>
                        </div>
                     </div>
                  <?php } ?>
               </div>
            </div>
         </div>
         <!-- End MIDDLE -->
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