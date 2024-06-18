<style>
.top-navbar a{
        text-align: center;
        display: block;
        padding: 15px;
        text-decoration: none;
    }
    .top-navbar a:hover{
        background-color: #ededed;
    }
    .top-navbar ul li a{
        text-decoration: none;
        background:none;
    }
    .top-navbar ul{
        list-style-type: none;
        width:100%;
        text-align: center;
        padding: 0px;
        margin: 0px;
    }
    .top-navbar ul li{
        display:inline-block;
        list-style: none;
        margin: 10px 10px;
    }
    body{
    background-image: url(page.jpeg);
    background-size: 50%;
    height: 100px;
    justify-content: center;
    width: 100%;
    }
    .row{
        justify-content: center;
        display: flex;
        margin: 10px;
    }
    .main{
        padding-top: 150px;
    }
    nav{
        padding: 20px 20px;
    }
</style>
<?php include "header.php" ?>
<body id="page-top">
<nav>
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <a>
                <div class="mx-3 font-weight-bold text-primary">WEBSITE DAFTAR HADIR TAMU PERPUSTAKAAN</div>
            </a>
     <!-- Topbar Navbar -->
     <ul class="navbar-nav ml-auto">

     <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item -->
                        <div class="top-navbar">
                        <li class="nav-item dropdown no-arrow">
                        <ul>
                            <li><a href="#"><div class="text-primary">About Us</div></a></li>
                            <li><a href="#"><div class="text-primary">Contact Us</div></a></li>
                        </ul>
                        </li>
                        </div>
                    </ul>
                </nav>
<div class="main">
    <div class="row">
<!--card reservasi-->
<div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class=" col mr-2">
                                            <div class="h5 text-xs font-weight-bold text-info text-uppercase mb-1">REGISTRASI AKUN</div>
                                            <div class="mb-0 font-weight-bold">
                                            <a href="registrasi.php" class="btn btn-success btn-sm">REGISTRASI</a>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--card daftar-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">LOGIN AKUN</div>
                                            <div class="mb-0 font-weight-bold"> 
                                            <a href="login.php" class="btn btn-warning btn-sm">LOGIN</a>
                                            </div></div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</body>