<?php include "sidebar_admin.php"?>
<div class="card shadow">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pengunjung [<?=date('d-m-Y')?>]</h6>
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
                                            <th>EMAIL</th>
                                            <th>NO.HANDPHONE</th>
                                            <th>USIA</th>
                                            <th>KETERANGAN</th>
                                            <th>FOTO</th>
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
                                            <td><?= $data['EMAIL'] ?></td>
                                            <td><?= $data['NO_HANDPHONE'] ?></td>
                                            <td><?= $data['USIA'] ?></td>
                                            <td><?= $data['KETERANGAN'] ?></td>
                                            <td>
                                                        <img src="images/<?php echo $data['FOTO'];?>" width=100 height=100/>
                                                        </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
</div>
<!--end rekap1-->
<?php include "footer.php";?>