<!DOCTYPE html>
<html>
<head>
    <title>Register Account</title>
    <style>
        body { font-family: Arial; display: flex; justify-content: center; padding-top: 50px; }
        .form-card { border: 1px solid #ccc; padding: 20px; border-radius: 8px; width: 250px; }
        input { display: block; margin-bottom: 15px; width: 100%; padding: 8px; box-sizing: border-box; }
        .btn-reg { background: #007bff; color: white; border: none; padding: 10px; cursor: pointer; width: 100%; }
        .error { color: #d9534f; font-size: 0.9em; margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="form-card">
        <h2>Register</h2>
        
        <?php if(isset($_GET['error'])): ?>
            <div class="error"><?php echo htmlspecialchars($_GET['error']); ?></div>
        <?php endif; ?>

        <form action="process_register.php" method="POST">
            <input type="text" name="username" placeholder="Choose Username" required>
            <input type="password" name="password" placeholder="Create Password" required>
            <button type="submit" class="btn-reg">Create Account</button>
        </form>
        <p style="font-size: 0.8em; text-align: center;">
            Already have an account? <a href="index.php">Login here</a>
        </p>
    </div>
</body>
</html>