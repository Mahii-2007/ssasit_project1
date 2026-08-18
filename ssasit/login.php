<!DOCTYPE html>
<html>
<head>
    <title>SSASIT Staff Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <div class="login-box">

        <h2>SSASIT Staff Portal</h2>
        <p>Staff Login</p>

        <form action="login_process.php" method="POST">

            <label>Staff ID / Email</label>
            <input type="text"  name="email" placeholder="Enter Staff ID or Email" require>

            <label>Password</label>
            <input type="password"  name="password" placeholder="Enter Password" require>

            <button type="submit">Login</button>

        </form>

        <p class="register">
            Don't have an account?
            <a href="index.php">Register</a>
        </p>

    </div>

</div>

</body>
</html>