<?php 
require_once('../util/valid_admin.php');
include'../view/admin_header.php';
?>

<div class="contentWrapper"> 
    
        <main>

            <!-- main content goes here -->
            <article class="main">

                <!-- display any errors -->
                <div class="error">
                    <?php if(!empty($error)){
                        echo $error;
                    } ?>
                </div>

                <!-- allow the administrator to add a category and price -->
                <h2>Add Category</h2>
                <form id="add_category_form"action="index.php" method="post">
                    <input type="hidden" name="action" value="add_category" >
                    <label>Category Name:</label>
                    <input type="text"  name="name" ><br>
                    <label>Category Price</label>
                    <input type="text" name="cat_catprice"><br>
                    <input type="submit" value="Add Category">
                </form>
     
                <!-- display the category list in a table format-->
                <h2>Category List</h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>&nbsp;</th>
                    </tr>
                        <?php foreach ($categories as $category) : ?>
                    <tr>
                        <td><a href=".?category_id=<?php echo $category['cat_categoryID']; ?>"><?php echo $category['cat_categoryName']; ?></a></td>
                        <td><?php echo $category['cat_price']; ?></td>
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
                <p>NOTE: You cannot delete a category with products in it.</p>

                <!-- display the products in a table format -->
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
                        <td>
                            <form action="." method="post">
                                <input type="hidden" name="action"
                                       value="delete_product">
                                <input type="hidden" name="product_id"
                                       value="<?php echo $product['prod_productID']; ?>">
                                <input type="hidden" name="category_id"
                                       value="<?php echo $product['prod_categoryID']; ?>">
                                <input type="submit" value="Delete"> 
                            </form>
                        </td>
                    </tr>
                        <?php endforeach; ?>
                </table>
            </article><!-- end main article -->
        </main>
       

</div><!-- end content wrapper -->

<?php include'../view/footer.php'; ?>