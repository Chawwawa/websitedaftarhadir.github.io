<?php session_start(); ?>
<?php include "header.php"; ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-left justify-content-left">
                <div class="sidebar-brand-text mx-3"><?php echo $_SESSION['username']; ?></div>
            </a>
            <!-- Nav Item - Dashboard -->
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
            <a class="nav-link font-weight-bold text-white-80" href="dashboard_user.php">
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item font-weight-bold text-white-80">
                <a class="nav-link" href="reservasi.php">
                    <span>Data Reservasi </span></a>
            </li>
            <!-- Footer -->
            <hr class="sidebar-divider my-0">
            <div class="foot">
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link font-weight-bold text-white-80" href="logout.php">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                    Logout</a>
            </li></div>
</ul>
<!-- STYLE NAVBAR-->
<style>
    .user-pict{
        width: 40px;
        border-radius: 50%;
        cursor: pointer;
        margin: 20px;
    }
    .profile-warp{
        position: absolute;
        top: 100%;
        right: 10%;
        width: 200px;
        max-height: 0px;
        overflow: hidden;
        transition: max-height 0.5s;
    }
    .profile-warp.open-menu{
        max-height: 400px;
    }
    .user-info{
        display:flex;
        align-items: center;
    }
    .user-info span{
        font-weight: 500;
    }
    .user-info img{
        width:60px;
        border-radius: 50%;
        margin-right: 15px;
    }
    .sub-menu{
        background: #fff;
        padding: 20px;
        margin: 10px;
        text-decoration: none;
    }
    .sub-menu hr{
        border: 0px;
        height: 1px;
        width: 100%;
        margin: 15px 0 10px;
    }
    .sub-menu-link{
        display: flex;
        align-items: center;
        text-decoration: none;
        padding: 12px 0;
    }
    .sub-menu-link a{
        width: 100%;
        text-decoration: none;
        font-size: 22px;
        transition: transform 0.5s;
    }
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
</style>

 <!-- Content Wrapper --> <!--NAVBAR-->
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

<!--SCRIPT-->
<script>
    let subMenu = document.getElementById("subMenu");
    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }
</script>
<!-- END SCRIPT -->
<div class="container-fluid">
