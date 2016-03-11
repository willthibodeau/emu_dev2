
<?php 
include'../view/header.php';

?>
<div class="contentWrapper"> 
    <div class="columnWrapper">

        <!-- main content goes here -->
        <article class="main">
            <main>
            	<h2>Register</h2>
				<form action="." method="post" >
					<input type="hidden" name="action" value="register">
					<table>
						<tr><td>Username</td>
						<td><input type="text" name="userName" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
						</tr>
					 	<tr><td>First Name</td>
						<td><input type="text" class="demoInputBox" name="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
						</tr>
						<tr><td>Last Name</td>
						<td><input type="text" class="demoInputBox" name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
						</tr> 
						<tr><td>Password</td>
						<td><input type="password" name="password" value=""></td>
						</tr> 
					 	<tr><td>Confirm Password</td>
						<td><input type="password" class="demoInputBox" name="password2" value=""></td>
						</tr>
						<tr><td>Email</td>
						<td><input type="text" class="demoInputBox" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
						</tr>
						 

					</table>
					<div><input type="submit"  value="Register" ></div>
				</form>
<p>Password between 8 and 20 characters; must contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character, but cannot contain whitespace.
Matches 	
Abc1234# | abcD$123 | A1b2&C3!
Non-Matches 	
abcd1234 | AbCd!@#$ | Abc 123#</p>
				 <?php if(!empty($error)) { echo $error; } ?>
     <?php if(!empty($message)) { echo $message; } ?>

			</main>
        </article><!-- end main article -->

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