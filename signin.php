<?php 
 require 'config/constants.php';

 $username_email = $_SESSION['signin-data']['username_email']?? null;
 $password = $_SESSION['signin-data']['password']?? null;

 unset($_SESSION['signin-data']);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE WELL</title>
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/styles.css">
    <script src="https://kit.fontawesome.com/76b2077ad1.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;0,800;1,700&display=swap');
        </style>
        
</head>
<body>

<style>
    
</style>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Sign In</h2>
       <?php if (isset($_SESSION['signup-success'])) : ?>
        <div class="alert__message success">
            <p>
                <?= $_SESSION['signup-success'];
                unset($_SESSION['signup-success']); 
                ?>
                 </p>
        </div> 
      <?php  elseif(isset($_SESSION['signin'])) : ?>  
            <div class="alert__message error">
            <p> 
                <?= $_SESSION['signin'] ;  
                unset($_SESSION['signin']); 
                ?>
            </p>
           
            </div> 
      <?php endif ?>

        <form action="<?= ROOT_URL ?>signin-logic.php"  method="POST">
            <input type="text" name="username_email"  value="<?=$username_email?>"  placeholder=" Username or email">
            <input type="password"  name="password"  value="<?=$password?>"   placeholder="password">

            <button type="submit" name="SUBMIT"  class="btn">Sign In</button>
            <small>Don't have an account? <a href="signup.php">Sign Up</a></small>
        </form>
    </div>
</section>


</body>
</html> 