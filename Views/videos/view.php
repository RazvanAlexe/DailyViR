<?php
    echo "<div>";
    echo "<label>".$video['title']."</label>";
    echo "</div>";
    echo "<div>";    
    echo "<iframe src='https://player.vimeo.com/video/".$video['id_video']."' width='1000px' height='500px' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>";
    echo "</div>";
    echo "<div>";
    echo "<label> Uploaded by ".$video['id_user']." on " .$video['upload_date']."</label>";
    echo "</div>";
    echo "<div>";
    echo "<label> Views: ".$video['views']."</label>";
    echo "</div>";
    echo "<div>";
    echo "<label>".$video['description']."</label>";
    echo "</div>";
    echo "<div>";
    echo "<a href='/MVC_todo/videos/stats/".$video['id_video']."'><button>Statistics</button></a>";
    echo "</div>";
    if($fav == false)
    {
        echo "<div>";
        echo "<button id='favourite'>Add to favourites</button>";
        echo "</div>";
    }
    else
    {
        echo "<div>";
        echo "<button id='unfavourite'>Remove from favourites</button>";
        echo "</div>";
    }
    if(isset($_COOKIE['logged'])){
        if($_COOKIE['username'] == 'admin'){
            echo "<div>";
            echo "<button id='deleteVideo'>Delete video</button>";
            echo "</div>";      
        }
    }       
    echo "<div>";
    echo "<div>";
    echo "<label> Comments: </label>";
    echo "</div>";
    echo "<div>";
    echo "<form>";
    echo "<input type='text' id='commentText' placeholder='Post a comment...'>";
    echo "<button id = 'commentPost'>Post new comment</button>";
    echo "</form>";
    echo "</div>";
    echo "<div>";
    foreach($comments as $comment)
    {
        echo "<div>";
        echo "<label>".$comment['id_user']." at ".$comment['post_time']." says:</label>";
        echo "</div>";
        echo "<div>";
        echo "<label>".$comment['comment']."</label>";
        echo "</div>"; 
        if(isset($_COOKIE['logged']))
        {
            if($_COOKIE['username'] == 'admin'){
                echo "<div>";
                echo "<button id = '".$comment['id_comment']."' class='deletePost'>Delete comment</button>";
                echo "</div>";      
            }
        }
    }
    echo "</div>";
    echo "<span class ='".substr($_SERVER['REQUEST_URI'],22)."' id='id_video'></span>";
    echo "<span class='".$video['title']."' id='title'></span>";
?>