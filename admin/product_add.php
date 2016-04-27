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
            <p>* required</p>
                <form action="." method="post" class="formInput">
                    <input type="hidden" name="action" value="add_product">
                    <label for="package">Package Name:</label>
                <select name="category_id">
                    <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['cat_categoryID']; ?>" id="package"><?php echo $category['cat_categoryName']; ?>
                    </option> 
                    <?php endforeach; ?>
                </select><br>
                    <label for="code">* Product Code:</label>
                    <input type="text" name="code" id="code" required="required" value="<?php if(isset($_POST['code'])) echo $_POST['code']; ?>"><br>

                    <label for="quantity">* Product Quantity:</label>
                    <input type="text" name="name" id="quantity" required="required" value="<?php if(isset($_POST['quantity'])) echo $_POST['quantity']; ?>"><br>

                    <label for="description">* Product Description:</label>
                    <input type="text" name="description" id="description" required="required" value="<?php if(isset($_POST['description'])) echo $_POST['description']; ?>"><br>

                    <label for="price">* Product Price:</label>
                    <input type="text" name="price" id="price" required="required" value="<?php if(isset($_POST['price'])) echo $_POST['price']; ?>"><br>
                
                    <label for="imagePath">* Product Image:</label>
                    <select name="imagePath">
                        <?php foreach( $get_images as $get_image) : ?>
                        <option value="<?php echo $get_image ; ?>" id="imagePath" required="required"><?php echo $get_image; ?>
                        </option>
                        <?php endforeach; ?>
                    </select><br>

                    <label for="imageAlt">* Product Image Alt Text:</label>
                    <input type="text" name="imagealt" id="imageAlt" required="required" value="<?php if(isset($_POST['imagealt'])) echo $_POST['imagealt']; ?>"><br>

                  
                    <input class="button" type="submit" value="Add Product" /><br>
                </form>
</div><!-- end main content --> 

<?php include '../view/footer.php'; ?>