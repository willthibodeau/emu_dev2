<?php include '../view/header.php'; ?>

<div class="contentWrapper"> 
  <!-- <div class="columnWrapper"> -->

    <!-- main content goes here -->
    <article class="main">
     
     
        <h2>Login Page</h2>
        <form action="." method="post">
          <input type="hidden" name="action" value="login">
          <label>Username:</label>
          <input type="text"  name="username" size="30" placeholder="Please enter a username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">
          <br>
          <label>Password:</label>
          <input type="password"  name="password" size="30" placeholder="Please enter a password">
          <br>
          <label>&nbsp;</label>
          <input type="submit" value="Login">
        </form>

        <form action="." method="post">
            <input type="hidden" name="action" value="register_form">
            <input type="submit" value="Resister Here">
        </form> 
        <p>Abc1234#</p>

        <div class="error">
          <?php if(!empty($error)) { echo $error; } ?>
          <?php if(!empty($message)) { echo $message; } ?>
        </div>  
    
    
    </article><!-- end main article -->

</div><!-- end content wrapper -->

<?php include '../view/footer.php'; ?>