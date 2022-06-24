
<!doctype html>
<head>
    <meta charset="utf-8">
    <title>Daily ViR</title>
    <link rel="stylesheet" href="http://localhost/MVC_todo/Content/css/index.css">
</head>
    <body>
        <div class="navBar">
            <div class="navBar__left">
                <a href="/MVC_todo/"><img class="navBar__logo" src="/MVC_todo/Content/image/camera.png" alt="The src doesn't exist"></a>
                
                <a class="navBar__textLogo" href="/MVC_todo/" target="_self">DailyViR</a>
                <?php
                if(isset($_COOKIE['logged']))
                {
                    if($_COOKIE['logged'] == 1)
                    {
                ?>
                <div role="search" class="navBar__search">
                    <label for="search"> </label><input type="search" id="search" name="search" placeholder="Search...">
                    <img src="http://localhost/MVC_todo/Content/image/search.svg" class="navBar__searchIcon" alt="The src doesn't exist">
                </div>

                <span class="accordion">
                <a><img src="http://localhost/MVC_todo/Content/image/menu.svg" class="accordion__catIcon" alt="The src doesn't exist"></a>
                </span>

                <div class="accordion__cat">
                    <a href="/MVC_todo/videos/search/Title" class="accordion__catBtn">Title</a>
                    <a href="/MVC_todo/videos/search/TW" class="accordion__catBtn">TW</a>
                    <a href="/MVC_todo/videos/search/Streaming" class="accordion__catBtn">Streaming</a>
                    <a href="/MVC_todo/videos/search/Politics" class="accordion__catBtn">Politics</a>
                    <a href="/MVC_todo/videos/search/Spirituality" class="accordion__catBtn">Spirituality</a>
                    <a href="/MVC_todo/videos/search/Beauty" class="accordion__catBtn">Beauty</a>
                    <a href="/MVC_todo/videos/search/DIY" class="accordion__catBtn">DIYs</a>
                    <a href="/MVC_todo/videos/search/Cooking" class="accordion__catBtn">Cooking</a>
                </div>
                <?php
                    }
                }
                ?>
            </div>

            <div class="navBar__right">
                <?php
                if(isset($_COOKIE['logged']))
                {
                    if($_COOKIE['logged'] == 1)
                    {
                ?>
                <a href="/MVC_todo/users/view/"><img src="http://localhost/MVC_todo/Content/image/image.png" class="navBar__pictureAccount" alt="The src doesn't exist"></a>

                <a href="/MVC_todo/mains/about"><img src="http://localhost/MVC_todo/Content/image/about.svg" class="navBar__aboutIcon" alt="The src doesn't exist"></a>

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

                <a href="/MVC_todo/users/studio/"><img src="http://localhost/MVC_todo/Content/image/upload_video.png" class="navBar__uploadIcon " alt="The src doesn't exist"></a>

                <a href="/MVC_todo/videos/trending/" class="navBar__trendingBtn">Trending</a>
                <?php
                    } 
                }
                else
                {
                ?>
                <a href="/MVC_todo/users/login"><button>Login</button></a>
                <a href="/MVC_todo/users/signup"><button>Sign up</button></a>
                <?php
                }
                ?>
            </div>

        </div>


        <main>
            <div>
                <?php
                echo $content_for_layout;
                ?>
            </div>

        </main>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/MVC_todo/Content/js/scripts.js" type="text/javascript"></script>
</html>
