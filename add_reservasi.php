<!DOCTYPE html>
<html>
<head>
    <title>Reservasi</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
        .container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"], input[type="password"], input[type="email"], input[type="submit"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        
        .form-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-container .form-name {
            text-align: center;
            margin-top: 15px;
        }
        .form-container .form-name p {

            text-decoration: none;
            color:grey;
            font-size: 14px;
        }
    </style>
</head>
<body>


<div class="form-container">
        <h2>Reservasi</h2>
        <form action="add_reservasi.php" method="post">
            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Lengkap" name="NAMA_LENGKAP" required>
            <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Alamat Email" name="EMAIL" required>
            <input type="text" class="form-control form-control-user" id="exampleInputNo" placeholder="No.Handphone" name="NO_HANDPHONE" required>
            <input type="text" class="form-control form-control-user" id="exampleInputUsia" placeholder="Usia" name="USIA" required>
            <div class="form-group">
                <label>TANGGAL :</label>
                <input class="form-control" type="date" name="TANGGAL"  value="<?=isset($_POST['TANGGAL'])? $_POST['TANGGAL'] : date('Y-m-d') ?>" required></div>
            <input type="text" class="form-control form-control-user" id="exampleInputJam" placeholder="Waktu/Jam" name="WAKTU" required>
            <input type="submit" name="submit" value="Daftar">
        </form>
            <div class="form-name">
            <p>by. Kelompok 8 - XI RPL | 2024 - <?=date('Y')?></p></div>
        </div>
</div>
<?php
include "koneksi.php";
if (isset($_POST['submit'])) {
    $NAMA_LENGKAP = $_POST['NAMA_LENGKAP'];
    $EMAIL = $_POST['EMAIL'];
    $NO_HANDPHONE = $_POST['NO_HANDPHONE'];
    $USIA = $_POST['USIA'];
    $TANGGAL = $_POST['TANGGAL'];
    $WAKTU = $_POST['WAKTU'];

    $input = "INSERT INTO reservasi (NAMA_LENGKAP,EMAIL,NO_HANDPHONE,USIA,TANGGAL,WAKTU) VALUES ('$NAMA_LENGKAP', '$EMAIL','$NO_HANDPHONE','$USIA', '$TANGGAL', '$WAKTU')";
    $sql = mysqli_query($mysqli, $input);

    if($sql){
        echo "<script>alert('Berhasil Mendaftar!');
        document.location='index.php'</script>";
    }else{
            echo"<script>alert('Yah, Gagal Mendaftar!');
            document.location='index.php'</script>";
}
header('location: reservasi.php');

}
?>
</body>
</html>
    <!-- end form -->
    <!-- DataTales Example-->