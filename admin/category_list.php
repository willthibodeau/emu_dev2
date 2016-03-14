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
                    <td><a href=".?category_id=<?php echo $category['cat_categoryID']; ?>"><?php echo $category['cat_categoryName']; ?></a></td>
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

             <h2>Products</h2><p> in the <?php echo $category_name; ?> category are:</p> 
        <table>
            <tr><th>productID</th>
                <th>cat id</th>
                <th>Code</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>&nbsp;</th>
                
            </tr>

            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['prod_productID']; ?></td> 
                <td><?php echo $product['prod_categoryID']; ?></td>
                <td><?php echo $product['prod_prodCode']; ?></td>
                <td><?php echo $product['prod_productName']; ?></td>
                <td><?php echo $product['prod_price']; ?></td>
                <td><img src="<?php echo $product['imagepath']; ?>" alt="<?php echo $product['imagealt']; ?>"></td>
            </tr>
            <?php endforeach; ?>
        </table>
            <h2>Add Category</h2>
            <form id="add_category_form"
                  action="index.php" method="post">
                <input type="hidden" name="action" value="add_category" />

                <label>Name:</label>
                <input type="text"  name="name" />
                <input type="submit" value="Add"/>
            </form>

            <form action="" method="post">
                <input type="hidden" name="action" value="logout">
                <input type="submit" value="Logout">
            </form>

            <p>Error is:<?php if(!empty($error)) { echo $error; } ?>
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