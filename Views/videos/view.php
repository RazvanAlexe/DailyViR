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
    echo "<div>";
    echo "<div>";
    echo "<label> Comments: </label>";
    echo "</div>";
    echo "<div>";
    echo "<form action='/MVC_todo/videos/view/".$video['id_video']."' method='post'>";
    echo "<input type='text' id='comment' placeholder='Username...'>";
    echo "<button type = 'submit'>Post new comment</button>";
    echo "</form>";
    echo "</div>";
    echo "<div>";
    foreach($comments as $comment){
        echo "<div>";
        echo "<label>".$comment['id_user']." at ".$comment['post_time']." says:</label>";
        echo "</div>";
        echo "<div>";
        echo "<label>".$comment['comment']."</label>";
        echo "</div>";        
    }
    echo "</div>";
?>