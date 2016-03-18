<?php include '../view/header.php'; ?>

<div class="contentWrapper"> 
  <div class="columnWrapper">

    <!-- main content goes here -->
    <article class="main">
     
     <main>
        <h1>Login Page</h1>
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

        <div class="error">
          <?php if(!empty($error)) { echo $error; } ?>
          <?php if(!empty($message)) { echo $message; } ?>
        </div>  
    </main>
    
    </article><!-- end main article -->

    <!-- first sidebar goes here -->
    <aside class="sidebar1">
   <?php include'../view/public_sidebar.php'; ?>
    </aside><!-- end sidebar 1 -->
  </div><!-- end column wrapper -->

  <!-- second sidebar goes here -->
  <aside class="sidebar2">
  <h2>Google Ads</h2>

  </aside><!-- end sidebar 2 -->
</div><!-- end content wrapper -->

<?php include '../view/footer.php'; ?>