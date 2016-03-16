<?php 
// require_once('../util/valid_admin.php');
include'../view/header.php';
?>

<div class="contentWrapper"> 
    <div class="columnWrapper">
        <main>
        <!-- main content goes here -->
            <article class="main">
                <h2>Product Listing Page</h2>
                
            <h2>Categories</h2>
                    <table>
                        
                            <?php foreach ($categories as $category) : ?>
                        <tr>
                            <td><a href=".?category_id=<?php echo $category['cat_categoryID']; ?>"><?php echo $category['cat_categoryName']; ?></a></td>
                           
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