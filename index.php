<?php include 'view/header.php'; ?>
<?php if(!empty($_SESSION['admin'])) {
  header('Location: ./login/index.php');
} else if (!empty($_SESSION['member'])){
  header('Location: ./login/index.php');
}
?>

<div class="contentWrapper"> 
  <!-- <div class="columnWrapper"> -->

    <!-- main content goes here -->
    <div
        class="parallax-image-wrapper"
        data-anchor-target="#page-intro"
        data-bottom-top="transform:translateY(200%)"
        data-top-bottom="transform:translateY(0)">

            <div
                  class="parallax-image"
                  style="background-image:url(img/SteakHome2.jpg)"
                  data-anchor-target="#page-intro"
                  data-bottom-top="transform: translateY(-80%);"
                  data-top-bottom="transform: translateY(80%);"
                  >

            </div>
    </div>
   
<div
        class="parallax-image-wrapper"
        data-anchor-target=".body-text + .gap"
        data-bottom-top="transform:translateY(200%)"
        data-top-bottom="transform:translateY(0)">

    <div
            class="parallax-image"
            style="background-image:url(img/chicken.jpg)"
            data-anchor-target=".body-text + .gap"
            data-bottom-top="transform: translateY(-80%);"
            data-top-bottom="transform: translateY(80%);"
            >

    </div>
</div>


<div id="skrollr-body">

    <div id="page-intro" class="gap" style="background-image:url(img/SteakHome2.jpg); ">
    <header>
        <h1>Elite Meats Utah</h1>
    </header>
    </div>


    <div class="body-text">

        <h2>This is the introduction to the company</h2>

        <p data-300-center-top="transform: scale(0.8); opacity: 0" data-300-center-center="transform: scale(1); opacity: 1">
            We have a delicious product. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida in odio vel tincidunt. Fusce quis lectus accumsan, accumsan nibh sed, aliquet purus. In vitae velit eu est cursus malesuada sed ut nibh. Curabitur a leo enim.
        </p>


        <p data-200-center-top="transform: scale(0.8); opacity: 0" data-200-center-center="transform: scale(1); opacity: 1">
            We save you lots of money. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida in odio vel tincidunt. Fusce quis lectus accumsan, accumsan nibh sed, aliquet purus. In vitae velit eu est cursus malesuada sed ut nibh. Curabitur a leo enim.
        </p>

        <p data-100-center-top="transform: scale(0.8); opacity: 0" data-100-center-center="transform: scale(1); opacity: 1">
            Your life will be fun when you buy our products. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida in odio vel tincidunt. Fusce quis lectus accumsan, accumsan nibh sed, aliquet purus. In vitae velit eu est cursus malesuada sed ut nibh. 
        </p>

    </div>
    <div id="page-intro" class="gap" style="background-image:url(img/chicken.jpg); ">
    <header>
        <h1>Delicious Chicken</h1>
    </header>
    </div>

    <div class="features-list">

        <h2>Features</h2>

        <div data-100-bottom-top="transform: translateX(-200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1">
            <i class="material-icons">filter 1</i>
            <h4> <b>Beef</b></h4>
        </div>

        <div data-100-bottom-top="transform: translateY(200px); opacity: 0" data-center-top="transform: translateY(0px); opacity: 1">
            <i class="material-icons">filter 2</i>
            <h4> <b>Pork</b></h4>
        </div>

        <div data-100-bottom-top="transform: translateX(200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1">
            <i class="material-icons">filter 3</i>
            <h4><b>Chicken</b></h4>
        </div>

    </div>

</div>
   
</div><!-- end content wrapper -->

<?php include 'view/footer.php'; ?>
