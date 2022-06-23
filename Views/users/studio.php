
    <?php
            $username = $_SESSION['username'];
            $run = $connection->query("SELECT * FROM user_video WHERE id_user = '$username'");
            foreach($run as $rows)
            {
            ?>
        <div class="column">
            <a href="../Video%20Viewer/view_video.php?id=<?php echo $rows['id_video'];?>">
            <div class = "grid-item">
            <img src="vimeo.png" alt="The src doesn't exist">
            </div>
            <div class = "grid-item">
              <label class="video-title"><?php 
                              $id_video = $rows['id_video'];
                              $run2 = $connection->query("SELECT * FROM video WHERE id_video = '$id_video'");
                              $rows2 = $run2->fetch_assoc();
                              echo $rows2['title'];
                              ?></label>
              <a>
              <div class="grid-subitem">
                <label class="tags"><?php 
                              $id_video = $rows['id_video'];
                              $run2 = $connection->query("SELECT * FROM video WHERE id_video = '$id_video'");
                              $rows2 = $run2->fetch_assoc();
                              echo $rows2['description'];
                              ?></label>
              </div>
            </div>
            <div class = "grid-item">
              <a href="../Statistics/statistics.php?id=<?php echo $rows['id_video'];?>">
                <button class="edit">Statistics</button>
              </a>
            </div>
          </div>
        <?php
            }
        ?>
        <div class="column">
          <a href="../upload_video/upload_video.php">
            <button class="edit">Upload</button>
          </a>
        </div>
