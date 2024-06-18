<!DOCTYPE html>
<html>
<head>
    <title>Form Daftar Hadir</title>
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

        input[type="text"], input[type="password"], input[type="email"], input[type="submit"], input[type="file"] {
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

        .form-container input[id="keterangan"] {
            width: 50%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
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
        .form-container .select {
            width: 50%;
            padding: 9px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            display: flex;
            float: right;
        }

    </style>
</head>
<body>


<div class="form-container">
        <h2>Isi Daftar Hadir</h2>
        <form action="form_absen.php" method="POST" enctype="multipart/form-data" >
            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Lengkap" name="NAMA_LENGKAP" required>
            <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Alamat Email" name="EMAIL" required>
            <input type="text" class="form-control form-control-user" id="exampleInputNo" placeholder="No.Handphone" name="NO_HANDPHONE" required>
            <input type="text" class="form-control form-control-user" id="exampleInputUsia" placeholder="Usia" name="USIA" required>
            <div class="form-group">
            <input id="keterangan" placeholder="Keterangan->" disabled>
            <select name="KETERANGAN" class="select" requires>
                <option value="HADIR">Hadir</option>
                <option value="IZIN">Izin</option>
                <option value="SAKIT">Sakit</option>
            </select></div>
            <input type="file" placeholder="Upload Foto" name="image" id="image" accept=".jpg, .jpeg, .png" required>
            <input type="submit" name="submit" value="Daftar">
        </form>
            <div class="form-name">
            <p>by. Kelompok 8 - XI RPL | 2024 - <?=date('Y')?></p></div>
        </div>
</div>
<?php
include "koneksi.php";
date_default_timezone_set('Asia/Jakarta');
if (isset($_POST['submit'])) {
    $TANGGAL=date('Y-m-d');
    $WAKTU=date('H:i:s');
    $NAMA_LENGKAP = $_POST['NAMA_LENGKAP'];
    $EMAIL = $_POST['EMAIL'];
    $NO_HANDPHONE = $_POST['NO_HANDPHONE'];
    $USIA = $_POST['USIA'];
    $KETERANGAN = $_POST['KETERANGAN'];
    $fileName = $_FILES["image"]["name"];
    $tempName = $_FILES["image"]["tmp_name"];
    $query = mysqli_query ($mysqli, "INSERT INTO absen_tamu (TANGGAL,WAKTU,NAMA_LENGKAP,EMAIL,NO_HANDPHONE,USIA,KETERANGAN,FOTO) VALUES ('$TANGGAL','$WAKTU','$NAMA_LENGKAP','$EMAIL','$NO_HANDPHONE','$USIA','$KETERANGAN','$fileName')");

    if(move_uploaded_file($tempName, "images/".$fileName)){
        echo "<script>alert('File Uploaded Succesfully');
        document.location='index.php'</script>";
    }else{
        echo "<script>File Not Uploaded</script>";
    }
}
?>
</body>
</html>
    <!-- end form -->
    <!-- DataTales Example-->