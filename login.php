<?php
session_start();

if (isset($_SESSION['login_error'])) {
    echo '<div style="color:#ffdddd; background:#d72a67; padding:5px 10px; margin-bottom:10px; border-radius:5px;">'
         . $_SESSION['login_error'] . '</div>';
    unset($_SESSION['login_error']);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Coffe Shop Puding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body class="login-body">

    <div class="login-card">
        <h3 class="text-center mb-4">Login Admin</h3>

        <form action="controller/proses_login.php" method="post">

            <div class="mb-3">
                <label class="form-label">Username</label>
                <input 
                    type="text" 
                    name="username" 
                    class="form-control" 
                    value="<?php echo isset($_COOKIE['username']) ? htmlspecialchars($_COOKIE['username']) : ''; ?>" 
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input 
                    type="password" 
                    name="password" 
                    class="form-control" 
                    required>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label" for="remember">Remember me</label>
            </div>

            <button type="submit" class="btn btn-login w-100">
                Login
            </button>

            <div class="text-center mt-3">
                <a href="index.php" class="back-link">Kembali ke Beranda</a>
            </div>

        </form>
    </div>

</body>
</html>