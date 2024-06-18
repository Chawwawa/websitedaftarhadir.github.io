<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
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

        input[type="text"], input[type="password"], input[type="email"], input[type="submit"] {
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

        .form-container .form-switch {
            text-align: center;
            margin-top: 15px;
        }

        .form-container .form-switch a {
            text-decoration: underline;
            color: #007bff;
        }
        .form-container .form-name {
            text-align: center;
            margin-top: 5px;
            font-size: 14px;
        }
        .form-container .form-name p {
            text-decoration: none;
            color: grey;
        }
        .form-container .select {
            width: 100%;
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
        <h2>Registrasi</h2>
        <form action="#" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="email" name="email" placeholder="Email" required>
            <div class="form-group">
            <select name="keterangan" class="select" required>
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select></div>
            <input type="submit" name="register" value="Register">
        </form>
        <div class="form-switch">
            <a href="login.php" id="login-link">Already have an account? Login here</a>
        </div>
        <div class="form-name">
            <p>by. Kelompok 8 - XI RPL | 2024 - <?=date('Y')?></p></div>
        </div>
    </div>
<?php
include "koneksi.php";
if (isset($_POST['register'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $keterangan = $_POST['keterangan'];
    $input = "INSERT INTO register (username,password,email,keterangan) VALUES ('$user', '$pass','$email','$keterangan')";
    $sql = mysqli_query($mysqli, $input);

    if($sql){
        echo "<script>alert('Berhasil Mendaftar!');
        document.location='login.php'</script>";
    }else{
            echo"<script>alert('Yah, Gagal Mendaftar!');
            document.location='index.php'</script>";
}
header('location: login.php');
}
?>

</body>
</html>