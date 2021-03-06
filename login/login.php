<?php 
///////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                    /
//   Author: Will Thibodeau                                                                           /
//   Project: Elitemeatsutah.com                                                                      /
//   Final Project WEB 289 2016SP                                                                     /
//   Date: April 28, 2016                                                                             /
//   File: login.php                                                                                  /
//   Description: displays for a member or admin to login                                             /
//                                                                                                    /
///////////////////////////////////////////////////////////////////////////////////////////////////////
include '../view/header.php'; ?>
<div class="main-content">

     
     
        <h2>Login Page</h2>
        <p>* required fields</p>
        <div class="error">
          <?php if(!empty($error)) { echo htmlspecialchars($error); } ?>
          <?php if(!empty($message)) { echo htmlspecialchars($message); } ?>
        </div> 
        <form action="." method="post" class="formInput">
          <input type="hidden" name="action" value="login">
          
          <label for="username">* Username:</label>
          <input autofocus type="text"  name="username" id="username"  size="30" placeholder="Please enter a username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">
          <br>
          <label for="password">* Password:</label>
          <input type="password"  name="password" id="password"  size="30" placeholder="Please enter a password">
          <br>
          
          <button class="button" type="submit" value="Login">Login</button>
        </form>

        <form action="." method="post">
            <input type="hidden" name="action" value="register_form">
            <button class="button" type="submit" value="Resister Here">Register</button>
        </form> 
        <!-- <p>Abc1234#</p> -->
</div><!-- end main content --> 

<?php include '../view/footer.php'; ?>