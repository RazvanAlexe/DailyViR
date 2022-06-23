
        <form action='upload_video.php' method='post' enctype="multipart/form-data">
            <div>
                <input type='file' name='file1' accept="video/*">
            </div>
            <div class="txt_field">
                <input input type="text" name="title" placeholder="Title...">
            </div>
            <div class="txt_field">
                <input type="text" name="description" placeholder="Description...">
            </div>
            <button type='submit' name='upload-btn'>Upload</button>
        </form>
