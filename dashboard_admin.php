
<?php
include_once("sidebar_admin.php");
 
$sql = mysqli_query($mysqli, "SELECT * FROM register");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">DASHBOARD</h1>
                    </div>
<div class="row">
<!--card reservasi-->
<div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class=" col mr-2">
                                            <div class="h5 text-xs font-weight-bold text-info text-uppercase mb-1">Ingin reservasi?</div>
                                            <div class="mb-0 font-weight-bold">
                                            <a href="add_reservasi.php" class="btn btn-success btn-sm">RESERVASI</a>
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
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Daftar Hadir Tamu</div>
                                            <div class="mb-0 font-weight-bold"> 
                                            <a href="form_absen.php" class="btn btn-warning btn-sm">FORM DAFTAR HADIR</a>
                                            </div></div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- Table -->
<div class="card shadow">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Tamu [<?=date('d-m-Y')?>]</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>TANGGAL</th>
                                            <th>WAKTU</th>
                                            <th>NAMA LENGKAP</th>
                                            <th>USIA</th>
                                            <th>KETERANGAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $tgl=date('Y-m-d');
                                        $tampil=mysqli_query($mysqli, "SELECT * FROM absen_tamu where TANGGAL like '%$tgl%' order by ID desc");
                                        $no=1;
                                        while($data=mysqli_fetch_array($tampil)){
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data['TANGGAL'] ?></td>
                                            <td><?= $data['WAKTU'] ?></td>
                                            <td><?= $data['NAMA_LENGKAP'] ?></td>
                                            <td><?= $data['USIA'] ?></td>
                                            <td><?= $data['KETERANGAN'] ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
</div>
<!--end rekap1-->
<?php include "footer.php";?>