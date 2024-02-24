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
    <link rel="stylesheet" href="<?= ROOT_URL?>./css/contact.css">
    <script src="https://kit.fontawesome.com/76b2077ad1.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;0,800;1,700&display=swap');
        </style>
        
</head>
<body>
    <nav>
        <div class="container nav__container">
        <style>
            *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Poppins', sans-serif;
    background-image: linear-gradient( #ffdad5bf,#fff7f9) ;
}
       
.contact-inputs:focus{
    border: 2px solid hsla(214, 89%, 52%, 0.89);
} 
      .contact-left .contact-inputs{
        background:#fff;
      }
      .contact-left input::placeholder{
        color: #000;
      }
           .contact-left input{
        
                color:#000;
                background: #fff;

            }
            .contact-right{
                margin-left: 150px;
            }
            .contact-right img{
    transition: ease;
    margin-top: 80px;
    align-items: center;
    display: flex;
    justify-content: space-between;
    z-index: 10;
    cursor: pointer;
    width: 800px;
    height: 70vh;
    border-radius: 10px;
}
            .text a{
                width: 8rem;
    margin-bottom:30px ;
    display: flex;
    border-radius: 20px;
    padding: 8px 20px;
    background:  #006cbed0;
   
}

            .text{
                position: absolute;
                top: 55%;
                left: 55%;
                color:#fff;
                font-size:1rem;

                align-items: center;

            }
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


     <div class="contact-container">
        <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
            <div class="contact-left-title">
                <h2>
                    Registeration
                </h2>
                <hr>
            </div>
            <input type="hidden" name="access_key" value="2a6c0a09-17a9-4e5d-aea9-e60b25b453c9">
              <input type="text" name="name" placeholder="Your Name" class="contact-inputs" required>
              <input type="email" name="email" placeholder="Your Email" class="contact-inputs" required>
              <input type="tel" name="phone" placeholder="Your Phone" class="contact-inputs" required>
              <textarea name="message" placeholder="Message..." class="contact-inputs" required></textarea>
                <button type="submit" >Submit <img src="image/rightarrow.png" height="20px" width="20px" alt=""></i></button>

        </form>
        <div class="contact-right">
               
        <img src="image/1705521091_DSC7653.jpg" alt="" class="slide">
        <img src="image/1705521185_DSC7660.jpg" alt="" class="slide">
        <img src="image/1705590924mountains-190055_640.jpg" alt="" class="slide">
          <div class="text">        
          <p class="slide">
            <h2> Contact </h2>
            <b>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
             Accusantium exercitationem quos quas esse architecto cumque <br>
        </b>
       
          </p> 
          <a href="#">Lean more</a> 
          </div>
        
<script src="<?=ROOT_URL ?>./js/script.js"></script>
        </div>
    
  </div>
  

  <section class="category__buttons">
    <div class="container category__buttons-container">
            <?php 
            $all_categories_query = "SELECT * FROM categories";
            $all_categories = mysqli_query($connection, $all_categories_query);
            
            ?>
            <?php while($category = mysqli_fetch_assoc($all_categories)) : ?>
            <a href="<?= ROOT_URL?>category-post.php?id=<?= $category['id']?>" class="category__button"><?= $category['title']?></a>
           <?php endwhile ?>
        </div>
    </section>
  

    <?php
    include 'partials/footer.php';
    ?> 