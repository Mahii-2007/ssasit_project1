<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SSASIT Staff Profile</title>

    <link rel="stylesheet" href="profile.css">
</head>

<body>

<header class="top-header">

    <div class="logo">
        SSASIT Staff Portal
    </div>

    <a href="login.php" class="logout-btn">
        Logout
    </a>

</header>


<div class="page">

    <!-- Sidebar -->
    <aside class="sidebar">

        <a href="dashboard.php" class="menu">
            🏠 Dashboard
        </a>

        <a href="posts.php" class="menu">
            📝 Posts
        </a>

        <a href="profile.php" class="menu active">
            👤 Profile
        </a>

    </aside>


    <!-- Profile -->
    <main class="main-content">

        <h1>My Profile</h1>

        <p class="subtitle">
            Your staff account information
        </p>


        <div class="profile-card">

            <div class="profile-icon">
                👤
            </div>

            <h2>My Account</h2>

            <form>

                <label>Name</label>
                <input type="text" placeholder="Your name">

                <label>Email</label>
                <input type="email" placeholder="Your email">

                <label>Department</label>
                <input type="text" placeholder="Your department">

                <label>Role</label>

                <select>
                    <option>Select Role</option>
                    <option>Staff</option>
                    <option>Faculty</option>
                    <option>Admin</option>
                </select>

                <button type="submit">
                    Update Profile
                </button>

            </form>

        </div>

    </main>

</div>

</body>
</html>