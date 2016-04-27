<?php 
require_once('../util/valid_member.php');
include'../view/member_header.php';
?>
<div class="main-content">
<div class="formInput">
<h2>Search Results Page</h2>

<?php if(!empty($message)){
	echo $message;
} ?>

<table class="adminTable1">
	<thead>
		<tr>		
            <th>Product Quantity</th>
            <th>Product Description</th>
            <th>Product Price</th>
            <th>Product Image</th>
            <th>&nbsp;</th> 
        </tr>
            <?php foreach ($search_names as $product) : ?>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $product['prod_productQuantity']; ?></td>
            <td><?php echo $product['prod_description']; ?></td>
            <td><?php echo $product['prod_price']; ?></td>
            <td><img src="<?php echo $product['imagepath']; ?>" alt="<?php echo $product['imagealt']; ?>"></td>
            
		</tr>
	</tbody>
<?php endforeach; ?>
</table>
</div>
</div><!-- end main content -->

<?php include '../view/footer.php'; ?>

