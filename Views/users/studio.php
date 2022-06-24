<?php
    echo "<div>";
    foreach($videos as $video)
    {
    echo "<div>";
    echo "<a href='/MVC_todo/videos/view/".$video['id_video']."'>";
    echo "<img src='/MVC_todo/Content/image/vimeo.png' alt='The src doesn't exist'>";
    echo "<label class='video-title'>".$video['title']."</label>";
    echo "<a>";
    echo "<label class='description'>".$video['description']."</label>";
    echo "</div>";
    }
    echo "<a href='/MVC_todo/videos/create/'>";
    echo "<button class='edit'>Upload</button>";
    echo "</a>";
    echo "</div>";
?>