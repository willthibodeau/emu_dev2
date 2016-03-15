<?php 
require_once('../util/valid_admin.php');
include'../view/header.php';
?>

<div class="contentWrapper"> 
    <div class="columnWrapper">
        <main>
        <!-- main content goes here -->
            <article class="main">
                <h2>Category_list.php</h2>
                <ul>
                    <li><a href="index.php?action=list_categories">Category List</a></li>
                    <li><a href="index.php?action=show_add_form">Add Products</a></li>
                    <li><a href="../imageProcess/index.php">Image Manager</a></li>
                  
                </ul>
    <?php echo $cwd ; ?>
    <?php foreach ($img as $imag) : ?>
    <?php echo $imag[0]; ?>
    <?php endforeach; ?>
              
                    <h2>Category List</h2>
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
                                    <input type="hidden" name="category_id" value="<?php echo $category['cat_categoryID']; ?>"/>
                                    <input type="submit" value="Delete"/>
                                </form>
                            </td>
                        </tr>
                            <?php endforeach; ?>
                    </table>

                    <h2>Products</h2><p> in the <?php echo $category_name; ?> category are:</p> 
                    <table>
                        <tr>
                            <th>Product ID</th>
                            <th>Category ID</th>
                            <th>Product Code</th>
                            <th>Product Name</th>
                            <th>Product Description</th>
                            <th>Product Price</th>
                            <th>Product Image</th>
                            <th>Product Image Alt Text</th>
                            <th>&nbsp;</th> 
                        </tr>

                            <?php foreach ($products as $product) : ?>
                        <tr>
                            <td><?php echo $product['prod_productID']; ?></td> 
                            <td><?php echo $product['prod_categoryID']; ?></td>
                            <td><?php echo $product['prod_prodCode']; ?></td>
                            <td><?php echo $product['prod_productName']; ?></td>
                            <td><?php echo $product['prod_description']; ?></td>
                            <td><?php echo $product['prod_price']; ?></td>
                            <td><img src="<?php echo $product['imagepath']; ?>" alt="<?php echo $product['imagealt']; ?>"></td>
                            <td><?php echo $product['imagealt']; ?></td>
                             <td><form action="." method="post">
                                <input type="hidden" name="action"
                                       value="delete_product">
                                <input type="hidden" name="product_id"
                                       value="<?php echo $product['prod_productID']; ?>">
                                <input type="hidden" name="category_id"
                                       value="<?php echo $product['prod_categoryID']; ?>">
                                <input type="submit" value="Delete"> 
                                <hr>
                            </form></td>
                        </tr>
                            <?php endforeach; ?>
                    </table>
                    <h2>Add Category</h2>
                    <form id="add_category_form"action="index.php" method="post">
                        <input type="hidden" name="action" value="add_category" />
                        <label>Name:</label>
                        <input type="text"  name="name" />
                        <input type="submit" value="Add"/>
                    </form>

                    <form action="" method="post">
                        <input type="hidden" name="action" value="logout">
                        <input type="submit" value="Logout">
                    </form>
            </article><!-- end main article -->
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