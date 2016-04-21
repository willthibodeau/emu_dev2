<?php 
include'../view/header.php'; 
?>
<div class="main-content">
    <h2>Success.php</h2>
    <div class="formInput">
        <p>Thank you for registering. Your information is:</p>
        <p>Username:<?php echo $userName; ?></p>
        <p>First Name:<?php echo $firstName; ?></p>
        <p>Last Name: <?php echo $lastName; ?></p>
        <p>Email Address : <?php echo $email; ?></p>
        <p>Phone: <?php echo $phone; ?></p>
        <a href="login.php"><button>Login</button></a>
    </div>
</div>
        
<?php include '../view/footer.php'; ?>