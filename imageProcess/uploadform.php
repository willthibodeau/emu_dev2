<?php 
require_once('../util/valid_admin.php');
include'../view/header.php';
?>

<div class="contentWrapper"> 
    <div class="columnWrapper">
        <main>
            <article class="main">
        <h1>Image Manager</h1>
        <p>You are logged in as <?php echo $_SESSION['admin']; ?>.</p>
        
            <!-- main content goes here -->
            
                <h2>Category_list.php</h2>
                <ul>
                    <li><a href="../admin/index.php?action=list_categories">Category List</a></li>
                    <li><a href="../admin/index.php?action=show_add_form">Add Products</a></li>
                    <li><a href="../imageProcess/index.php">Image Manager</a></li>
                  
                </ul>

            <h2>Image to be uploaded</h2>
            <form id="upload_form"
                  action="." method="POST"
                  enctype="multipart/form-data">
                <input type="hidden" name="action" value="upload">
                <input type="file" name="file1"><br>
                <input id="upload_button" type="submit" value="Upload">
            </form>
            <h2>Images in the directory</h2>
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
                        <a href="<?php echo $delete_url;?>">
                            <img src="delete.png" alt="Delete"></a>
                        <a href="<?php echo $file_url; ?>">
                            <?php echo $filename; ?></a>
                    </li>
                <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </main>

        <!-- first sidebar goes here -->
        <aside class="sidebar1">
          <h2>Sidebar 1</h2>
              <?php include '../view/admin_sidebar1.php'; ?>
        </aside><!-- end sidebar 1 -->
    </div><!-- end column wrapper -->

    <!-- second sidebar goes here -->
    <aside class="sidebar2">
        <h2>Sidebar 2 </h2>
        <p>comments / testimonials</p>
    </aside><!-- end sidebar 2 -->

</div><!-- end content wrapper -->

<?php include'../view/footer.php'; ?>