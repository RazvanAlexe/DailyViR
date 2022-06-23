<?php
    foreach($videos as $video)
    {
    echo "<a href='../Video%20Viewer/view_video.php?id=".$video['id_video']."'>";
    echo "<img src='http://localhost/MVC_todo/Content/image/vimeo.png' alt='The src doesn't exist'>";
    echo "<label class='video-title'>".$video['title']."</label>";
    echo "<a>";
    echo "<label class='description'>".$video['description']."</label>";
    }
?>