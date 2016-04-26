<?php 
require_once('../util/valid_admin.php');
include'../view/admin_header.php';
?>
<div class="main-content">

        <div class="error">
          <?php if(!empty($error)) { echo $error; } ?>
        </div> 

            <!-- Allow the administrator to add products -->
            <h2>Add Products</h2>
                <form action="." method="post" class="formInput">
                    <input type="hidden" name="action" value="add_product">
                    <label for="package">Package Name:</label>
                <select name="category_id">
                    <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['cat_categoryID']; ?>" id="package"><?php echo $category['cat_categoryName']; ?>
                    </option> 
                    <?php endforeach; ?>
                </select><br>
                    <label for="code">Product Code:</label>
                    <input type="text" name="code" id="code"><br>

                    <label for="quantity">Product Quantity:</label>
                    <input type="text" name="name" id="quantity" ><br>

                    <label for="description">Product Description:</label>
                    <input type="text" name="description" id="description"><br>

                    <label for="price">Product Price:</label>
                    <input type="text" name="price" id="price"><br>
                
                    <label for="imagePath">Product Image:</label>
                    <select name="imagePath">
                        <?php foreach( $get_images as $get_image) : ?>
                        <option value="<?php echo $get_image ; ?>" id="imagePath"><?php echo $get_image; ?>
                        </option>
                        <?php endforeach; ?>
                    </select><br>

                    <label for="imageAlt">Product Image Alt Text:</label>
                    <input type="text" name="imagealt" id="imageAlt"><br>

                  
                    <input class="button" type="submit" value="Add Product" /><br>
                </form>
</div><!-- end main content --> 

<?php include '../view/footer.php'; ?>