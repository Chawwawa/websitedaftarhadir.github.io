<?php include "sidebar_admin.php"?>
<div class="card shadow">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pengunjung [<?=date('d-m-Y')?>]</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="" class="text-center">
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Dari Tanggal :</label>
                                            <input class="form-control" type="date" name="tanggal1"  value="<?=isset($_POST['tanggal1'])? $_POST['tanggal1'] : date('Y-m-d') ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-2">
                                        <button class="btn btn-primary form-control" name="btampil"><i class="fa fa-search"></i>Tampilkan</button>
                                    </div>
                                </div>
                            </form>
                            <?php if (isset($_POST['btampil'])) : ?>
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
                                         if ($mysqli->connect_error) {
                                            die("Failed to connect to MySQL: " . $mysqli->connect_error);
                                        }
                    
                                        $tgl1 = $_POST['tanggal1'];
                                        // Use prepared statement to prevent SQL injection
                                        $stmt = $mysqli->prepare("SELECT * FROM absen_tamu WHERE TANGGAL = ? ORDER BY ID DESC");
                                        if ($stmt) {
                                            $stmt->bind_param("s", $tgl1);
                                            $stmt->execute();
                                            $result = $stmt->get_result();
                    
                                            if ($result && $result->num_rows > 0) {
                                                $no = 1;
                                                while ($data = $result->fetch_assoc()) {
                                                    ?><tr>
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?php echo htmlspecialchars($data['TANGGAL']); ?></td>
                                                        <td><?php echo htmlspecialchars($data['WAKTU']); ?></td>
                                                        <td><?php echo htmlspecialchars($data['NAMA_LENGKAP']); ?></td>
                                                        <td><?php echo htmlspecialchars($data['EMAIL']); ?></td>
                                                        <td><?php echo htmlspecialchars($data['NO_HANDPHONE']); ?></td>
                                                        <td><?php echo htmlspecialchars($data['USIA']); ?></td>
                                                        <td><?php echo htmlspecialchars($data['KETERANGAN']); ?></td>
                                                        <td>
                                                        <img src="images/<?php echo $data['FOTO'];?>" width=100 height=100/>
                                                        </td>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                            } else {
                                                echo "<tr><td colspan='6'>No matching records found.</td></tr>";
                                            }
                    
                                            $stmt->close();
                                        } else {
                                            echo "SQL Error: " . $mysqli->error;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php endif; ?>
                        </div>
</div>
    <?php include "footer.php";?>