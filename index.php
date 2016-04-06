<?php include 'view/header.php'; ?>
<?php if(!empty($_SESSION['admin'])) {
  header('Location: ./login/index.php');
} else if (!empty($_SESSION['member'])){
  header('Location: ./login/index.php');
}
?>

<div class="contentWrapper"> 
  <div class="columnWrapper">

    <!-- main content goes here -->
    <article class="main">
      <h2>Elite Meats Utah</h2>
      <h4>Home of the best prices on Meats and Seafood in Salt Lake City</h4>
      <p>We are a family friendly supplier of meat and seafood for all occasions. 
        If you are looking for delicious steaks or seafood we are the best choice.<img src="./imageProcess/images/tbone_100.jpg" alt="seafood"> 
        Check out our fine selection of Steaks, Chopped Steaks, Chicken and Seafood
        for all your favorite meal choices.
        
    </article><!-- end main article -->

    <!-- first sidebar goes here -->
    <aside class="sidebar1">
      <h2>Sidebar 1</h2>
      
     <p> sidebar menu goes here<p>
    </aside><!-- end sidebar 1 -->
  </div><!-- end column wrapper -->

  <!-- second sidebar goes here -->
  <aside class="sidebar2">
  <h2>Sidebar 2 </h2>
<p>comments / testimonials

  </aside><!-- end sidebar 2 -->
</div><!-- end content wrapper -->

<?php include 'view/footer.php'; ?>
