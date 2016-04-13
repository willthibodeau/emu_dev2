<?php 
if(isset($_SESSION['admin'])) { 
    require_once('../util/valid_admin.php');
    include'../view/admin_header.php';
}else if(!isset($_SESSION['admin'])){
  include'../view/header.php';  
}
?>

 <div class="contentWrapper"> 
    <!-- <div class="columnWrapper"> --> -->
        <main>
        <!-- main content goes here -->
            <article class="main" >
                <h2>Packages</h2><br>
                    <div class="productCategories">
                    
                        <ul class="menu"> 
                            <?php foreach ($categories as $category) : ?>
                            
                            <li><a href=".?category_id=<?php echo $category['cat_categoryID']; ?>"><?php echo $category['cat_categoryName']; ?><br><?php echo $category['cat_price']; ?></a>  
                            </li>
                                              
                            <?php endforeach; ?>
                        </ul> 
                        
                    
                    <h2><?php echo $category_name; ?> </h2>
                     </div>
                    <table class="productTable">
                        <thead>
                            <tr> 
                                <th>Quantity</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Image</th>  
                            </tr>
                        </thead>
                        <tbody>
                                <?php foreach ($products as $product) : ?>
                            <tr>
                                <td><?php echo $product['prod_productQuantity']; ?></td>
                                <td><?php echo $product['prod_description']; ?></td>
                                <td><?php echo $product['prod_price']; ?></td>
                                <td ><img src="<?php echo $product['imagepath']; ?>" alt="<?php echo $product['imagealt']; ?>" class="productImage"></td>
                            </tr>
                                <?php endforeach; ?>
                        </tbody>
                    </table> 
            </article><!-- end main article -->
        </main>
        <!-- first sidebar goes here -->
       
  

   
</div><!-- end content wrapper -->

<?php include'../view/footer.php'; ?>