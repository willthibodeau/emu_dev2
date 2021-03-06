<?php 
///////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                    /
//   Author: Will Thibodeau                                                                           /
//   Project: Elitemeatsutah.com                                                                      /
//   Final Project WEB 289 2016SP                                                                     /
//   Date: April 28, 2016                                                                             /
//   File: cart.php                                                                                   /
//   Description: displays the cart for the members                                                   /
//                                                                                                    /
///////////////////////////////////////////////////////////////////////////////////////////////////////

require_once('../util/valid_member.php');
include'../view/member_header.php';
?>
<div class="main-content">
	<h1>Member Cart</h1>
	<h2>Welcome <?php echo $_SESSION['member_firstName']; ?></h2>
	<h2 class="total">Your Total: $<?php  echo htmlspecialchars($total); ?></h2>
			<form action="." method="post" class="formInput">
                <input type="hidden" name="action" value="add_order">
                <input type="hidden" name="member_id" value="<?php echo $_SESSION['member_id']; ?>">
                <label for="package">Package Name:</label>
                <select name="category_id">
                    <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['cat_categoryID']; ?>" name="category_id">
                    	<?php echo htmlspecialchars($category['cat_categoryName']); ?><br>
                    	$<?php echo htmlspecialchars($category['cat_price']); ?>
                    </option> 
                    <?php endforeach; ?>
                </select>
                <label>Quantity:</label>
                <select name="quantity">
                        <?php for($i = 1; $i <= 10; $i++) : ?>
                    <option value="<?php echo $i; ?>">
                        <?php echo htmlspecialchars($i); ?>
                    </option>
                        <?php endfor; ?>
                </select><br>
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
                <td class="mediumPackage"><?php echo htmlspecialchars($cart[0]); ?></td>
                <td class="mediumPrice">$<?php echo htmlspecialchars($cart[1]); ?></td>
                <td class="mediumDiscount">$<?php echo htmlspecialchars(round(($cart[1] * ($cart[2] / 100 ))),0); ?></td>
                <td class="mediumYourP">$<?php $sum = round(($cart[1] - ($cart[1] * ($cart[2] / 100))),0) ; echo htmlspecialchars($sum); ?></td>
                <td class="mediumQuantity"><?php echo htmlspecialchars(round($cart[3]),0); ?></td>
                <td class="mediumSubtotal">$<?php echo htmlspecialchars(round($sum * $cart[3]),0); ?></td>
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