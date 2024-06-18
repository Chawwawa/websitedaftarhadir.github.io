<?php
include_once("sidebar_admin.php");
 
$sql = mysqli_query($mysqli, "SELECT * FROM register");
?>
<div class="card shadow col-xl-12">
                        <div class="card-header py-2">
                            <h6 class="m-0 font-weight-bold text-primary">Akun Terdaftar</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th>NO.</th> <th>USERNAME</th> <th>EMAIL</th><th>AKSI</th>
    </tr>
    </thead>
    <?php  
    while($user_data = mysqli_fetch_array($sql)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>";
        echo "
        <a href='hapus.php?id=".$user_data['id']."' class='btn btn-primary'>HAPUS</a>"; 
        echo "</td>";
        echo "</tr>";}
    ?>
    </table>
    </div>
    </div>
    </div>
    </body>
    <?php include "footer.php";?>