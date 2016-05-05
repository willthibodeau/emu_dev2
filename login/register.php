<?php 
///////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                    /
//   Author: Will Thibodeau                                                                           /
//   Project: Elitemeatsutah.com                                                                      /
//   Final Project WEB 289 2016SP                                                                     /
//   Date: April 28, 2016                                                                             /
//   File: register.php                                                                               /
//   Description: provides a form for a user to register as a member                                  /
//                                                                                                    /
///////////////////////////////////////////////////////////////////////////////////////////////////////
include'../view/header.php';

?>
 <div class="main-content">
	<h2>Register</h2>
	<p>* required fields</p>
	<div class="error">
		<?php if(!empty($error)) { echo htmlspecialchars($error); } ?>
	    <?php if(!empty($message)) { echo htmlspecialchars($message); } ?>
	</div>
	<form action="." method="post" class="formInput">
		<input type="hidden" name="action" value="register">
		
		<label>* Username</label>   
		    <input autofocus type="text" required="required" name="userName" value="<?php if(isset($_POST['userName'])) echo htmlspecialchars($_POST['userName']); ?>" maxlength="60">    
		    
	 	<label>* First Name</label>
		    <input type="text" required="required" name="firstName" value="<?php if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']); ?>">    
		    
		<label>* Last Name</label>
		    <input type="text" required="required" name="lastName" value="<?php if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']); ?>">    
		     
		<label>* Password</label>   
		    <input type="password" required="required" name="password" value="">    
		     
	 	<label>* Confirm Password</label>   
		    <input type="password" required="required" name="password2" value="">    
		    
		<label>Email</label>   
		    <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">    
		    
		<label>Phone</label>
	    <input type="text" name="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">    
		<div class="g-recaptcha" data-sitekey="6LfiWR4TAAAAANiSruoNPf4-A2laqrasSujQ3vLC"></div>
		<div>
			<button class="button" type="submit"  value="Register" >Register</button>
		</div>

	</form>
	<div class="formInput">
		<p>Password should be between 8 and 20 characters; must contain at least one lowercase letter, one uppercase letter, one numeric digit, 
			and one special character, but cannot contain whitespace.</p>
		<p>Matches could include: 	
			Abc1234# | abcD$123 | A1b2&C3!</p>
		<p>Non-Matches would be like: abcd1234 | AbCd!@#$ | Abc 123#</p><br>
		<p>Email matches could be like: asmith@mactec.com | foo12@foo.edu | bob.smith@foo.tv</p><br>
	</div><!-- end div -->		
</div><!-- end main content -->    

<?php include'../view/footer.php'; ?>