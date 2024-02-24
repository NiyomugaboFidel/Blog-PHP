<?php 
require 'config/database.php';

// fetch current user from database
If(isset($_SESSION['user-id'])) {
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT avatar FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $avatar = mysqli_fetch_assoc($result);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE WELL</title>
    <link rel="stylesheet" href="<?= ROOT_URL  ?>./css/styles.css">
    <script src="https://kit.fontawesome.com/76b2077ad1.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;0,800;1,700&display=swap');
        </style>
        
</head>
<body>
    <nav>
        <div class="container nav__container">
        <style>
                .logo{
                  height: 50px;
                  width: 50px;
                  display:flex;
                  margin-top: 10px;
                  
  
                }
  
                a small.thewell {
                  font-size: 17px;
              margin-right:520px;
      
                }
                
.post__thumbnail{
    border-radius:10px;
    border:1pxsolid var(--color-gray-900);
    overflow: hidden;
    margin-bottom: 1.6rem;
}

.post:hover .post__thumbnail img{
    filter: saturate(0);
    transition: filter 500ms ease;
}
              </style>
              <img  class="logo" src="<?= ROOT_URL?>/images/thewell-log.png" alt="">
            <a href="<?= ROOT_URL  ?>" class="nav__logo"> <small class="thewell">THE WELL</small></a>
            <ul class="nav__items">
                <li><a href="<?= ROOT_URL  ?>blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URL  ?>about.php">About</a></li>
                <li><a href="<?= ROOT_URL  ?>services.php">Services</a></li>
                <li><a href="<?= ROOT_URL  ?>contact.php">Contact</a></li>
            <?php if(isset($_SESSION['user-id'])): ?>
                
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="<?= ROOT_URL . 'images/' . $avatar['avatar'] ?>">
                    </div>
                    <ul>
                        <li><a href="<?= ROOT_URL  ?>admin/index.php">Dashboard</a></li>
                        <li><a href="<?= ROOT_URL ?>logout.php">logout</a></li>
                    </ul>
                </li>
                  <?php else : ?>
                <li> <a href="<?=  ROOT_URL ?>signin.php">Sign in</a></li>
                <?php endif ?>
                
            </ul>
            <button id="open__nav-btn"><i class="fa-solid fa-bars"></i></button>
            <button id="close__nav-btn"><i class="fa-solid fa-xmark"></i></button>
        </div>

    </nav>

