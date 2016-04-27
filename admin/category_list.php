<?php 
require_once('../util/valid_admin.php');
include'../view/admin_header.php';
?>
<div class="main-content">
    <!-- display any errors -->
    <div class="error">
        <?php if(!empty($error)){
            echo $error;
        } ?>
    </div>
    <h1>Administrator Home</h1>
    <!-- allow the administrator to add a category and price -->
    <h2>Add Category</h2>
    <p>* required</p>
    <form class="formInput" id="add_category_form"action="index.php" method="post">
        <input type="hidden" name="action" value="add_category" >
        <label for="name"> * Category Name:</label>
        <input type="text"  name="name" id="name" required="required" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>"><br>
        <label for="price">* Category Price:</label>
        <input type="text" name="cat_catprice" id="price" required="required" value="<?php if(isset($_POST['price'])) echo $_POST['price']; ?>"><br>
        <label for="discount">Discount Percent: </label>
        <input type="text" name="discount" id="discount"><br>
        <input class="button" type="submit" value="Add Category">
    </form>
    <!-- display the category list in a table format-->
    <h2>Category List</h2>
        <div class="formInput">
            <table class="adminTable1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>&nbsp;</th>
                    </tr>
                        <?php foreach ($categories as $category) : ?>
                </thead>
                    <tr>
                        <td><a class="button" href=".?category_id=<?php echo $category['cat_categoryID']; ?>"><?php echo $category['cat_categoryName']; ?></a></td>
                        <td><?php echo $category['cat_price']; ?></td>
                        <td>
                            <form action="index.php" method="post">
                                <input type="hidden" name="action" value="delete_category" />
                                <input type="hidden" name="category_id" value="<?php echo $category['cat_categoryID']; ?>"/>
                                <input class="button-delete" type="submit" value="Delete"/>
                            </form>
                        </td>
                    </tr>
                        <?php endforeach; ?>
            </table>
            <p>NOTE: You cannot delete a category with products in it.</p>
        </div>
        <!-- display the products in a table format -->
        <h2>Products</h2>
        <!-- <div class="formInput"> -->
        <p> <?php echo $category_name; ?></p> 
        <table class="adminTable2 formInput">
            <thead>
                <tr>
                    <th>Product Code</th>
                    <th>Product Quantity</th>
                    <th>Product Description</th>
                    <th>Product Price</th>
                    <th>Product Image</th>
                    <th>Product Image Alt Text</th>
                    <th>&nbsp;</th> 
                </tr>
                    <?php foreach ($products as $product) : ?>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $product['prod_prodCode']; ?></td>
                    <td><?php echo $product['prod_productQuantity']; ?></td>
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
                            <input class="button-delete" type="submit" value="Delete"> 
                        </form>
                    </td>
                </tr>
            </tbody>
                <?php endforeach; ?>
        </table>
    </div><!-- end formInput div -->
</div><!-- end main content -->
<?php include'../view/footer.php'; ?>