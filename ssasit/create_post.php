<!DOCTYPE html>
<html>

<head>

    <title>SSASIT - Create Post</title>

    <link rel="stylesheet" href="create_post.css">

</head>


<body>


<header>

    <div class="header">

        <h2>SSASIT Staff Portal</h2>

        <a href="dashboard.php">Dashboard</a>

    </div>

</header>



<div class="container">

    <h1>Create Social Media Post</h1>

    <p class="subtitle">
        Create and send your post to Sir
    </p>



    <div class="page">


        <!-- LEFT SIDE -->

        <div class="form-box">

            <h2>Post Details</h2>


            <label>Post Title</label>

            <input
                type="text"
                id="postTitle"
                placeholder="Enter post title"
            >


            <label>Description</label>

            <textarea
                id="postDescription"
                placeholder="Enter post description"
            ></textarea>


            <label>Select Photos</label>

            <input
                type="file"
                id="postPhotos"
                accept="image/*"
                multiple
            >


            <p class="photo-note">
                Select 1 to 6 photos
            </p>


            <p id="photoCount">
                0 photos selected
            </p>


            <button type="button" id="generateBtn">
                Generate Post
            </button>


            <button type="button" id="sendBtn" class="send-btn">
                Send Post to Sir
            </button>

        </div>



        <!-- RIGHT SIDE -->

        <div class="preview-box">

            <h2>Post Preview</h2>


            <div class="post-preview">


                <!-- YOUR SSASIT TEMPLATE -->

                <img
                    src="ssasit.jpeg" class="template" style="width:100%;">


                <!-- SELECTED PHOTOS -->

                <div
                    id="previewPhotos"
                    class="photo-area"
                ></div>


            </div>

        </div>


    </div>

</div>


<script src="create_post.js"></script>


</body>

</html>