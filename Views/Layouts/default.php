<!doctype html>
<head>
    <meta charset="utf-8">
    <title>Daily ViR</title>
    <link rel="stylesheet" href="http://localhost/MVC_todo/Content/css/index.css">
</head>

<body>
    <div class="navBar">
        <div class="navBar__left">
            <a href="/MVC_todo/"><img class="navBar__logo" src="http://localhost/MVC_todo/Content/image/camera.png" alt="The src doesn't exist"></a>
            
            <a class="navBar__textLogo" href="/MVC_todo/" target="_self">DailyViR</a>

            <div role="search" class="navBar__search">
                <label for="search"> </label><input type="search" id="search" name="search" placeholder="Search...">
                <img src="http://localhost/MVC_todo/Content/image/search.svg" class="navBar__searchIcon" alt="The src doesn't exist">
            </div>

            <span class="accordion">
            <a><img src="http://localhost/MVC_todo/Content/image/menu.svg" class="accordion__catIcon" alt="The src doesn't exist"></a>
            </span>

            <div class="accordion__cat">
                <a href="/MVC_todo/videos/search/Title" class="accordion__catBtn">Title</a>
                <a href="/MVC_todo/videos/search/Music" class="accordion__catBtn">Music</a>
                <a href="/MVC_todo/videos/search/Streaming" class="accordion__catBtn">Streaming</a>
                <a href="/MVC_todo/videos/search/Politics" class="accordion__catBtn">Politics</a>
                <a href="/MVC_todo/videos/search/Spirituality" class="accordion__catBtn">Spirituality</a>
                <a href="/MVC_todo/videos/search/Beauty" class="accordion__catBtn">Beauty</a>
                <a href="/MVC_todo/videos/search/DIY" class="accordion__catBtn">DIYs</a>
                <a href="/MVC_todo/videos/search/Cooking" class="accordion__catBtn">Cooking</a>
            </div>

        </div>

        <div class="navBar__right">

            <a href="/MVC_todo/users/view/"><img src="http://localhost/MVC_todo/Content/image/image.png" class="navBar__pictureAccount" alt="The src doesn't exist"></a>

            <a href="../About/about.html"><img src="http://localhost/MVC_todo/Content/image/about.svg" class="navBar__aboutIcon" alt="The src doesn't exist"></a>

            <span class="accordion">
                <a><img src="http://localhost/MVC_todo/Content/image/notifications.svg" class="accordion__notificationsIcon" alt="The src doesn't exist"></a>
            </span>

            <div class="accordion__notifications">
                <a class="accordion__notificationsTitle">Notifications:</a>
                <a>
                    <?php 
                    $xml = simplexml_load_file("http://localhost/MVC_todo/Content/Notifications.xml");
                    foreach($xml as $notification)
                    {
                    ?>
                    <div class="accordion__notificationsLeft">
                        <a href="/MVC_todo/users/view/"><img src="http://localhost/MVC_todo/Content/image/image.png" class="navBar__userPicture" alt="The src doesn't exist"></a>
                    </div>
                    <div class="accordion__notificationsRight">
                        <p class="accordion__notificationsText"><?php echo $notification->User." ".$notification->Action;?></p>
                    </div>
                </a>
                <?php
                    }
                ?>
             </div>

            <a href="../manage_video/manage_video.php"><img src="http://localhost/MVC_todo/Content/image/upload_video.png" class="navBar__uploadIcon " alt="The src doesn't exist"></a>

            <a class="navBar__trendingBtn" href="../Trending/trending.php" target="_self">Trending</a>

        
        </div>
    </div>

    <script>
        const acc = document.getElementsByClassName("accordion");

        acc[0].addEventListener("click", function () {
            this.classList.toggle("active");
            const panel = this.nextElementSibling;
            if (panel.style.display === "grid") {
                panel.style.display = "none";
            } else {
                panel.style.display = "grid";
            }
        });

        acc[1].addEventListener("click", function () {
            this.classList.toggle("active");
            const panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });

    </script>

    <main role="main" class="container">
        <div>
            <?php
            echo $content_for_layout;
            ?>
        </div>

    </main>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>
