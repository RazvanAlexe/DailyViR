<?php
    echo "<div class='viewBody'>";
    echo "<div    style='
    background-color: Black;
    overflow: hidden;
    display:inline-block;
    width: 60vw;
    height: 45vh;'>";    
    echo "<iframe src='https://player.vimeo.com/video/".$video['id_video']."' frameborder='0'       style='
        width: 100%;
        height: 100%;
      -webkit-transform:scale(1.0);
      -moz-transform:scale(0.8);
      -o-transform:scale(0.6);
      -ms-transform:scale(0.8);' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>";
    echo "</div>";
    echo "<div class='viewButtons'>";
    echo "<div>";
    echo "<a href='/MVC_todo/videos/stats/".$video['id_video']."'><button class='buttonVir'>Statistics</button></a>";
    echo "</div>";
    if($fav == false)
    {
        echo "<div>";
        echo "<button class='buttonVir' id='favourite'>Add to favourites</button>";
        echo "</div>";
    }
    else
    {
        echo "<div>";
        echo "<button class='buttonVir' id='unfavourite'>Remove from favourites</button>";
        echo "</div>";
    }
    if(isset($_SESSION['logged'])){
        if($_SESSION['username'] == 'admin'){
            echo "<div>";
            echo "<button class ='deletePost'id='deleteVideo'>Delete video</button>";
            echo "</div>";      
        }
    }
    echo "</div>";
    echo "<div class ='viewText'>";
    echo "<div class ='viewTitle'>";
    echo "<h1>".$video['title']."</h1>";
    echo "</div>";
    echo "<div>";
    echo "<label> Views: ".$video['views']."</label>";
    echo "</div>";
    echo "<div>";
    echo "<label> Uploaded by ".$video['id_user']." on " .$video['upload_date']."</label>";
    echo "</div>";
    echo "<div>";
    echo "<label>".$video['description']."</label>";
    echo "</div>";
    echo "</div>";
    echo "<div class = 'viewComments'>";
    echo "<div>";
    echo "<h2> Comments: </h2>";
    echo "</div>";
    echo "<div>";
    echo "<form>";
    echo "<button class='buttonVir' id = 'commentPost'>Post new comment</button>";
    echo "<input type='text' id='commentText' placeholder='Post a comment...'>";
    echo "</form>";
    echo "</div>";
    echo "<div class = 'viewCommentText'>";
    foreach($comments as $comment)
    {
        echo "<div class='commentElement'>";
        echo "<div class='commentDelete'>";
        if(isset($_SESSION['logged']))
        {
            if($_SESSION['username'] == 'admin'){
                echo "<div>";
                echo "<button id = '".$comment['id_comment']."' class='deletePost'>Delete comment</button>";
                echo "</div>";      
            }
        }
        echo "</div>";
        echo "<div class='commentText'>";
        echo "<div>";
        echo "<label>".$comment['id_user']." at ".$comment['post_time']." says:</label>";
        echo "</div>";
        echo "<div>";
        echo "<label>".$comment['comment']."</label>";
        echo "</div>";
        echo "</div>"; 
        echo "</div>";

    }
    echo "</div>";
    echo "<span class ='".substr($_SERVER['REQUEST_URI'],22)."' id='id_video'></span>";
    echo "<span class='".$video['title']."' id='title'></span>";
    echo "</div>";
?>