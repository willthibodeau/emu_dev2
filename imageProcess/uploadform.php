<?php 
require_once('../util/valid_admin.php');
include'../view/admin_header.php';
?>

<div class="main-content">
        <h2>Image Manager</h2>
        
        <div class="error">
          <?php if(!empty($error)) { echo htmlspecialchars($error); } ?>
        </div> 
            <!-- main content goes here -->
            <!-- content is straight from the book file -->
            <h3>Please select an image to upload.</h3>
            <form id="upload_form" class="formInput" 
                  action="." method="POST"
                  enctype="multipart/form-data">
                <input type="hidden" name="action" value="upload">
                <input class="button" type="file" name="file1"><br>
                <input class="button" id="upload_button" type="submit" value="Upload">
            </form>
            <h3>Images in the directory</h3>
            <div class="formInput">
            <?php if (count($files) == 0) : ?>
                <p>No images uploaded.</p>
            <?php else: ?>
                <ul>
                <?php foreach($files as $filename) :
                    $file_url = $image_dir . '/' .
                                $filename;
                    $delete_url = '.?action=delete&amp;filename=' .
                                  urlencode($filename);
                ?>
                    <li>
                        <a href="<?php echo $delete_url;?>" class="button-delete">
                            <!-- <img src="delete.png" alt="Delete">-->Delete</a> 
                        <a href="<?php echo $file_url; ?>" class="button" target="_blank">
                            <?php echo htmlspecialchars($filename); ?></a>
                    </li>
                <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            </div>
</div><!-- end main content -->

<?php include'../view/footer.php'; ?>