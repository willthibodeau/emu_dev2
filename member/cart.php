<?php 
require_once('../util/valid_member.php');
include'../view/member_header.php';
?>
<div class="main-content">
	<h1>Member Cart</h1>
				<h2>Welcome <?php echo $_SESSION['member_firstName']; ?></h2>
				<p><?php echo $_SESSION['member_id']; ?>

				<form action="." method="post" class="formInput">
                    <input type="hidden" name="action" value="add_order">
                    <input type="hidden" name="member_id" value="<?php echo $_SESSION['member_id']; ?>">
                    <label for="package">Package Name:</label>
                <select name="category_id">
                    <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['cat_categoryID']; ?>" name="category_id">
                    	<?php echo $category['cat_categoryName']; ?><br>
                    	<?php echo $category['cat_price']; ?>
                    </option> 
                    <?php endforeach; ?>
                </select>
                <label for="count">Number of packages</label><br>
                <select name="quantity">
                	<option>1</option>
                	<option>2</option>
                </select>
                <input class="button" type="submit" value="Submit Order">
            </form>

            <?php foreach($carts as $cart) :?>
			<ul class="formInput">
	            <li>
	            <?php echo $cart[0];?>&nbsp;
	            <?php echo $cart[1];?>&nbsp;
	            <?php echo $cart[2];?>
	            <?php echo $sum;?>

	        	</li>
    		</ul>

        <?php endforeach; ?>
</div>
<?php include'../view/footer.php'; ?>