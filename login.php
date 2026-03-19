<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body { font-family: Arial; display: flex; justify-content: center; padding-top: 50px; }
        .login-card { border: 1px solid #ccc; padding: 20px; border-radius: 8px; }
        input { display: block; margin-bottom: 10px; width: 200px; padding: 8px; }
        button { width: 100%; padding: 8px; background: #28a745; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Login</h2>
        <?php 
    if(isset($_GET['error'])) echo "<p style='color:red'>".$_GET['error']."</p>"; 
    if(isset($_GET['msg'])) echo "<p style='color:green'>".$_GET['msg']."</p>"; 
?>
        <form action="login_security.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
       <p style="font-size: 0.8em; text-align: center; margin-top: 15px;">
    Don't have an account? <a href="register.php">Register here</a>
</p>
        </form>
    </div>
</body>
</html>