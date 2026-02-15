<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="background"></div>

<div class="login-box">
    <h2>Sign In</h2>

    <form action="login_process.php" method="POST">

        <div class="input-group">
            <span class="icon">👤</span>
            <input type="text" name="username" required>
            <label>Username</label>
        </div>

        <div class="input-group">
            <span class="icon">🔒</span>
            <input type="password" name="password" required>
            <label>Password</label>
        </div>

        <button type="submit" class="btn">Login</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

