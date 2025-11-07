<?php
session_start(); // Memulai session

// Cek apakah form dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Data login statis
    if ($username == 'admin' && $password == '1234') {
        // Jika cocok, buat session dan pindah ke dashboard
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // Jika salah, tampilkan pesan error
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - POLGAN MART</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f5ff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 320px;
            text-align: center;
        }
        h2 {
            color: #2b4eff;
            margin-bottom: 20px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background-color: #2b4eff;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background-color: #2046d1;
        }
        .cancel {
            background-color: #ccc;
            color: black;
            margin-top: 10px;
        }
        .cancel:hover {
            background-color: #999;
        }
        .error {
            color: red;
            margin-bottom: 10px;
            font-size: 14px;
        }
        .footer {
            margin-top: 20px;
            font-size: 13px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>POLGAN MART</h2>

    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>

    <form method="post">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>

        <div class="footer">
            © 2025 POLGAN MART
        </div>
    </div>
</body>
</html>


