<?php
$total_posts = 0;
$my_posts = 0;

if (file_exists("db.php")) {
    include "db.php";

    if (isset($conn)) {

        $result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM post");

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $total_posts = $row['total'];
        }

        /* હાલ login user માટે અલગ count પછી connect કરી શકીએ */
        $my_posts = $total_posts;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SSASIT Staff Dashboard</title>

    <link rel="stylesheet" href="dashboard.css">
</head>

<body>

    <!-- TOP HEADER -->
    <header class="top-header">

        <div class="logo">
            SSASIT Staff Portal
        </div>

        <a href="logout.php" class="logout-btn">
            Logout
        </a>

    </header>


    <!-- PAGE AREA -->
    <div class="page">

        <!-- SIDEBAR -->
        <aside class="sidebar">

            <a href="dashboard.php" class="menu active">
                <span>🏠</span>
                Dashboard
            </a>

            <a href="create_post.php" class="menu">
                <span>📝</span>
                Posts
            </a>

            <a href="profile.php" class="menu">
                <span>👤</span>
                Profile
            </a>

        </aside>


        <!-- MAIN CONTENT -->
        <main class="main-content">

            <div class="welcome">

                <div>
                    <h1>Welcome, Staff 👋</h1>

                    <p>
                        Manage your SSASIT social media posts from here.
                    </p>
                </div>

            </div>


            <!-- DASHBOARD CARDS -->
            <div class="cards">

                <div class="card">

                    <div class="card-icon">
                        📝
                    </div>

                    <h3>Total Posts</h3>

                    <h2>
                        <?php echo $total_posts; ?>
                    </h2>

                </div>


                <div class="card">

                    <div class="card-icon">
                        📄
                    </div>

                    <h3>My Posts</h3>

                    <h2>
                        <?php echo $my_posts; ?>
                    </h2>

                </div>


                <div class="card">

                    <div class="card-icon">
                        👤
                    </div>

                    <h3>Profile</h3>

                    <h2>Staff</h2>

                </div>

            </div>


            <!-- RECENT POSTS -->
            <div class="recent-box">

                <div class="recent-header">

                    <h2>Recent Posts</h2>

                    <a href="create_post.php" class="create-btn">
                        + Create Post
                    </a>

                </div>

                <?php
                if ($total_posts == 0) {
                    echo "<p class='no-post'>No posts available yet.</p>";
                } else {
                    echo "<p class='post-item'>Your posts are available in the Posts section.</p>";
                }
                ?>

            </div>

        </main>

    </div>


    <script src="dashboard.js"></script>

</body>
</html>