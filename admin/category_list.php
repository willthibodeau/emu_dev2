<?php 


require_once('../util/valid_admin.php');

include'../view/header.php';
?>
<div class="contentWrapper"> 
    <div class="columnWrapper">

        <!-- main content goes here -->
        <article class="main">
            <main>
                <a href=".?action=category_list">Category Manger</a><br>
                <a href=".?action=product_list">Product Manager</a><br>
                <a href=".?action=image_list">Image Manager</a><br>
                <a href=".?action=user_list">User Manager</a><br>
                <a href=".?action=comment_list">Comment Manager</a><br>
            </main>
        
        
<p>You are logged in as <?php echo $_SESSION['admin']; ?>.</p>
    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($categories as $category) : ?>
        <tr>
            <td><?php echo $category['cat_categoryName']; ?></td>
            <td>
                <form action="index.php" method="post">
                    <input type="hidden" name="action" value="delete_category" />
                    <input type="hidden" name="category_id"
                           value="<?php echo $category['cat_categoryID']; ?>"/>
                    <input type="submit" value="Delete"/>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Add Category</h2>
    <form id="add_category_form"
          action="index.php" method="post">
        <input type="hidden" name="action" value="add_category" />

        <label>Name:</label>
        <input type="text" required="required" name="name" />
        <input type="submit" value="Add"/>
    </form>

    <p><a href="index.php?action=list_products">List Products</a></p>

    <form action="" method="post">
        <input type="hidden" name="action" value="logout">
        <input type="submit" value="Logout">
    </form>

     <?php if(!empty($error)) { echo $error; } ?>
    <p>Message is : <?php if(!empty($message)) { echo $message; } ?>

</article><!-- end main article -->
        <!-- first sidebar goes here -->
        <aside class="sidebar1">
          <h2>Sidebar 1</h2>
              
        </aside><!-- end sidebar 1 -->
    </div><!-- end column wrapper -->

    <!-- second sidebar goes here -->
    <aside class="sidebar2">
        <h2>Sidebar 2 </h2>
        <p>comments / testimonials</p>
    </aside><!-- end sidebar 2 -->
</div><!-- end content wrapper -->

<?php include'../view/footer.php'; ?>