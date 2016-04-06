<?php 
 
if(isset($_SESSION['admin'])) { 
    require_once('../util/valid_admin.php');
    include'../view/admin_header.php';
}else if(!isset($_SESSION['admin'])){
  include'../view/header.php';  
}
?>

<div class="contentWrapper"> 
    <div class="columnWrapper">
        <main>
        <!-- main content goes here -->
        <article class="main">
			<h2>Error</h2>

			<!-- show errors if variable is passed -->
			<?php 
				if(!empty($error)){
					echo $error; 
				}else{
					echo'Return to home.';
				}
			?>
        </article><!-- end main article -->

		<!-- first sidebar goes here -->
        <aside class="sidebar1">
          <?php include '../view/publilc_sidebar.php'; ?>   
        </aside><!-- end sidebar 1 -->
    </div><!-- end column wrapper -->

    <!-- second sidebar goes here -->
    <aside class="sidebar2">
        <h2>Google Ads</h2>
    </aside><!-- end sidebar 2 -->
</div><!-- end content wrapper -->

<?php include'../view/footer.php'; ?>