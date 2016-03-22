<?php 
 
if(isset($_SESSION['admin'])) { 
    require_once('../util/valid_admin.php');
    include'../view/admin_header.php';
}else if(!isset($_SESSION['admin'])){
  include'../view/header.php';  
}
?>

<div class="contentWrapper"> 
    <div class="columnWrapper">
        <main>
        <!-- main content goes here -->
            <article class="main">
                <h2>Product Listing Page</h2>
                
               
            <h2>Categories</h2>
                   
                        <div class="productCategories">
                         <ul> 
                            <?php foreach ($categories as $category) : ?>
                            
                                <li><a href=".?category_id=<?php echo $category['cat_categoryID']; ?>"><?php echo $category['cat_categoryName']; ?></a>  
                                </li>
                                              
                            <?php endforeach; ?>
                            </ul> 
                        </div>
                    <h2> <?php echo $category_name; ?> </h2> 
                    <table class="productTable">
                        <tr> 
                            <th>Quantity</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>  
                        </tr>
                            <?php foreach ($products as $product) : ?>
                        <tr>
                            <td><?php echo $product['prod_productName']; ?></td>
                            <td><?php echo $product['prod_description']; ?></td>
                            <td><?php echo $product['prod_price']; ?></td>
                            <td ><img src="<?php echo $product['imagepath']; ?>" alt="<?php echo $product['imagealt']; ?>" class="productImage"></td>
                        </tr>
                            <?php endforeach; ?>
                    </table> 
            </article><!-- end main article -->
        </main>
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