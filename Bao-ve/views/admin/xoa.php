<?php 
    require_once('controllers/admin/BaseAdminController.php');
    if(!isset($_SESSION['auth']))
    {
        header('Location:index.php?admin=auth&mod=login&act=loginForm');
    }
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Blog Admin</title>
        <link href="public/css1/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php 
            if(isset($_COOKIE['sussecc']))
            {
         ?>
         <div class="alert alert-success">
             <strong><?php echo $_COOKIE['sussecc'] ?></strong>
        </div>
        <?php } ?>

        <?php 
            if(isset($_COOKIE['error']))
            {
         ?>
         <div class="alert alert-success">
             <strong><?php echo $_COOKIE['error'] ?></strong>
        </div>
        <?php } ?>

        <?php 
            if(isset($_COOKIE['sussecc_update']))
            {
         ?>
         <div class="alert alert-success">
             <strong><?php echo $_COOKIE['sussecc_update'] ?></strong>
        </div>
        <?php } ?>

        <?php 
            if(isset($_COOKIE['error_update']))
            {
         ?>
         <div class="alert alert-success">
             <strong><?php echo $_COOKIE['error_update'] ?></strong>
        </div>
        <?php } ?>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="views/admin/admin.php">MY BLOG</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div style="color: white">
                <?php echo $_SESSION['auth']['name']; ?>
                    
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?admin=auth&mod=logout&act=logout">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php?admin=auth&mod=login&act=loginForm">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Trang tr???
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Qu???n l?? b??i vi???t
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?admin=admin&mod=post&act=add">Th??m b??i vi???t</a>
                                    <a class="nav-link" href="#">X??a ho???c S???a b??i vi???t</a>
                                    <a class="nav-link" href="index.php?admin=admin&mod=post&act=lists">Danh s??ch b??i vi???t</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="index.php?admin=admin&mod=email&act=list">
                                        Danh s??ch subcribe Email
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Login</a>
                                            <a class="nav-link" href="#">Register</a>
                                            <a class="nav-link" href="#">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">401 Page</a>
                                            <a class="nav-link" href="#">404 Page</a>
                                            <a class="nav-link" href="#">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    
                        <h1 class="mt-4">CH???N B??I VI???T ????? X??A</h1>
                        <!-- MIDDLE -->
                        <table class="table">
                            <thead>
                                <th>ID</th>
                                <th style="text-align: center;">Title</th>
                                <th style="text-align: center;" style="text-align: center;">Thumbnail</th>
                                <th style="text-align: center;">Action</th>
                            </thead>
                            <?php foreach ($lists as $value) {
                            ?>
                            <tr>
                                <td style="text-align: center;"><?php echo $value['id'] ?></td>
                                <td style="text-align: center;"><?php echo $value['title'] ?></td>
                                <td style="text-align: center;"><img src="public/images/<?= $value['thumbnail'] ?>" width='200px' height='200px' alt=""></td>
                                <td style="text-align: center;">
                                    <a class="btn btn-danger" href="index.php?admin=admin&mod=post&act=delete&id=<?= $value['id'] ?>" style="width: 90px;">Delete</a>
                                    <a class="btn btn-warning" href="index.php?admin=admin&mod=post&act=edit&id=<?= $value['id'] ?>" style="width: 90px;">Update</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                        <!-- END MIDDLE -->
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="public/js1/scripts.js"></script>
    </body>
</html>
