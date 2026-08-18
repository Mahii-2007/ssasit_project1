<!DOCTYPE html>
<html>
<head>
    <title>SSASIT Staff Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <div class="login-box">

        <h2> Staff Registration</h2>
        <p>Create your account</p>

      <form action="register_process.php" method="POST">

    <label>Name</label>
    <input type="text" name="name" placeholder="Enter your name" required>

    <label>Email</label>
    <input type="email" name="email" placeholder="Enter your email" required>

    <label>Department</label>
    <select name="department" required>
        <option value="">Select Department</option>
        <option value="BCA">BCA</option>
        <option value="BBA">BBA</option>
        <option value="MCA">MCA</option>
    </select>

    <label>Role</label>
    <select name="role" required>
        <option value="">Select Role</option>
        <option value="HOD">HOD</option>
        <option value="Faculty">Faculty</option>
        <option value="Staff">Staff</option>
    </select>

    <label>Password</label>
    <input type="password" name="password" placeholder="Enter password" required>

    <label>Confirm Password</label>
    <input type="password" name="confirm_password" placeholder="Confirm password" required>

    <button type="submit">Register</button>

</form>
        <p>
            Already have an account?
            <a href="login.php">Login</a>
        </p>

    </div>

</div>

</body>
</html>