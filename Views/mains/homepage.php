<?php
    echo "<div>";
    foreach($videos as $video)
    {
    echo "<div>";
    echo "<a href='http://localhost/MVC_todo/videos/view/".$video['id_video']."'>";
    echo "<img src='http://localhost/MVC_todo/Content/image/vimeo.png' alt='The src doesn't exist'>";
    echo "<label class='video-title'>".$video['title']."</label>";
    echo "<a>";
    echo "<label class='description'>".$video['description']."</label>";
    echo "</div>";
    }
    echo "</div>";
?>