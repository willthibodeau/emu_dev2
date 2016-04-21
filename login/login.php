<?php include '../view/header.php'; ?>
<div class="main-content">

     
     
        <h2>Login Page</h2>
        <div class="error">
          <?php if(!empty($error)) { echo $error; } ?>
          <?php if(!empty($message)) { echo $message; } ?>
        </div> 
        <form action="." method="post" class="formInput">
          <input type="hidden" name="action" value="login">
          
          <label for="username">Username:</label>
          <input type="text"  name="username" id="username" size="30" placeholder="Please enter a username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">
          <br>
          <label for="password">Password:</label>
          <input type="password"  name="password" id="password" size="30" placeholder="Please enter a password">
          <br>
          
          <button class="button" type="submit" value="Login">Login</button>
        </form>

        <form action="." method="post">
            <input type="hidden" name="action" value="register_form">
            <button class="button" type="submit" value="Resister Here">Register</button>
        </form> 
        <p>Abc1234#</p>
</div><!-- end main content --> 

<?php include '../view/footer.php'; ?>