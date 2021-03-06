<?php 
///////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                    /
//   Author: Will Thibodeau                                                                           /
//   Project: Elitemeatsutah.com                                                                      /
//   Final Project WEB 289 2016SP                                                                     /
//   Date: April 28, 2016                                                                             /
//   File: product_list.php                                                                           /
//   Description: shows the product list                                                              /
//                                                                                                    /
///////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_SESSION['admin'])) { 
    require_once('../util/valid_admin.php');
    include'../view/admin_header.php';
}else if(isset($_SESSION['member'])){
  include'../view/member_header.php';  
}else{
    include'../view/header.php';
}
?>
<div class="product-page">
    <h2>Products Page</h2>
                
                    <nav class="prod">
                        <h2>Packages</h2>
                        <ul class="formInput"> 
                            <?php foreach ($categories as $category) : ?>
                            
                            <li><a href=".?category_id=<?php echo $category['cat_categoryID']; ?>"><?php echo $category['cat_categoryName']; ?><br>$<?php echo $category['cat_price']; ?></a>  
                            </li>
                                              
                            <?php endforeach; ?>
                        </ul> 
                     </nav>   
                    <div class="prod">
                        
                        <h2><?php echo $category_name; ?> </h2>
                         <div class="formInput">
                        <table class="adminTable1">
                            <thead>
                                <tr class="prod-list"> 
                                    <th>Quantity</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Image</th>  
                                </tr>
                            </thead>
                            <tbody >
                                    <?php foreach ($products as $product) : ?>
                                <tr class="prod-list">
                                    <td ><?php echo $product['prod_productQuantity']; ?></td>
                                    <td><?php echo $product['prod_description']; ?></td>
                                    <td>$<?php echo $product['prod_price']; ?></td>
                                    <td ><img src="<?php echo $product['imagepath']; ?>" alt="<?php echo $product['imagealt']; ?>" class="productImage"></td>
                                </tr>
                                    <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    </div><!-- end prod-prod --> 
</div><!-- end product-page -->        
       
  

   


<?php include'../view/footer.php'; ?>