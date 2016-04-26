<?php 
require_once('../util/valid_member.php');
include'../view/member_header.php';
?>
<div class="main-content">
	<h1>Member Cart</h1>
				<h2>Welcome <?php echo $_SESSION['member_firstName']; ?></h2>
				<h2 class="total">Your Total: $<?php  echo $total; ?></h2>

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
            <h2>Your Order:</h2>

        <table class="formInput">
            <thead>
                <tr>
                    <th>Package Name</th>
                    <th>Retail Price</th>
                    <th>Discount</th>
                    <th>Your Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>&nbsp;</th>
                </tr>
                    <?php foreach ($carts as $cart) : ?>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $cart[0]; ?></td>
                    <td><?php echo $cart[1]; ?></td>
                    <td><?php echo ($cart[1] * $cart[2]); ?></td>
                    <td><?php $sum = ($cart[1] - ($cart[1] * $cart[2])) ; echo $sum; ?></td>
                    <td><?php echo $cart[3]; ?></td>
                    <td><?php echo $sum * $cart[3]; ?></td>
                    <td>
                        <form action="index.php" method="post">
                                <input type="hidden" name="action" value="delete_order" />
                                <input type="hidden" name="orders_orderID" value="<?php echo $cart[4]; ?>"/>
                                <input class="button-delete" type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
            </tbody>
                    <?php endforeach; ?>
        </table>

</div>
<?php include'../view/footer.php'; ?>