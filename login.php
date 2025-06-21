<?php
session_start();
include 'config/koneksi.php';

if (isset($_SESSION['admin'])) {
    // Kalau udah login, langsung diarahkan ke dashboard
    header('Location: dashboard.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Cari user di database
    $query = "SELECT * FROM admin WHERE username = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        // Login sukses, buat session
        $_SESSION['admin'] = $user['username'];
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-custom-blue {
            background-color: #2563eb; 
        }
        .logo {
            width: 100px;
            height: auto;
        }
        .rounded-input {
            border-radius: 15px; /* Radius lebih besar seperti gambar */
        }
        .input-border-gray {
            border: 1px solid #D3D3D3; /* Hanya stroke line abu-abu terang */
        }
        .half-screen {
            width: 50%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body class="flex h-screen">
    <div class="half-screen bg-custom-blue flex items-center justify-center">
        <div class="text-white text-center">
            <img src="https://upload.wikimedia.org/wikipedia/id/thumb/f/ff/Logo_UnivLampung.png/960px-Logo_UnivLampung.png" alt="Logo" class="logo mx-auto mb-4">
            <h2 class="text-xl font-bold">eHadir</h2>
            <h3 class="text-lg">Sistem Informasi Buku Tamu Digital</h3>
            <p class="text-sm">Ilmu Komputer, Universitas Lampung</p>
        </div>
    </div>
    <div class="half-screen flex items-center justify-center bg-white">
        <div class="p-8 w-full max-w-md text-center">
            <h1 class="text-2xl font-bold mb-6">Welcome Back!</h1>
            <?php if ($error): ?>
                <p class="mb-4 text-red-600 font-semibold"><?= htmlspecialchars($error) ?></p>
            <?php endif; ?>
            <form method="POST" action="" class="space-y-4">
                <div>
                    <input type="text" name="username" required class="w-full px-3 py-2 rounded-input input-border-gray" placeholder="Enter Username..." />
                </div>
                
                <div>
                    <input type="password" name="password" required class="w-full px-3 py-2 rounded-input input-border-gray" placeholder="Password" />
                </div>
                
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-input hover:bg-blue-700 transition">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
