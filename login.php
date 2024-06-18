<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
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

        .form-container input[type="email"],
        .form-container input[type="password"],
        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
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
        <h2>Login</h2>
        <form action="login.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <div class="form-group">
            <input type="submit" name="login" value="Login">
        </form>
        <div class="form-switch">
            <a href="registrasi.php" id="register-link">Don't have an account? Register here</a>
        </div>
        <div class="form-name">
            <p>by. Kelompok 8 - XI RPL | 2024 - <?=date('Y')?></p></div>
        </div>
    </div>

<?php
include "koneksi.php";
if (isset($_POST['login'])) {
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $query = mysqli_query ($mysqli, "SELECT * FROM register WHERE email = '$email' AND password = '$pass'");
    $result = mysqli_num_rows($query);
    if($result > 0){
        $getrole = mysqli_fetch_array($query);
        $role = $getrole['keterangan'];
        $_SESSION['username'] = $getrole['username'];

        if($role == 'admin'){
            $_SESSION['keterangan'] = 'admin';
             echo "<script>alert('Berhasil Login!');
             document.location='dashboard_admin.php'</script>";
        }else{
            $_SESSION['keterangan'] = 'user';
              echo "<script>alert('Berhasil Login!');
              document.location='dashboard_user.php'</script>";
        }
    }else{
        echo "data tidak ditemukan";
    }
}
?>