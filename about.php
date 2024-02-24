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
    
  
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

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


    <!-- Demo styles -->
    <style>
    
    
*{
    margin: 0;
    padding:0;
    outline: 0;
    border: 0;
    appearance: 0;
    list-style: none;
    text-decoration: none;
    box-sizing: border-box;

} 
.home .swiper-container .swiper-wrapper{
    position: relative;

}
.home .swiper-container.swiper-wrapper::before{
 
    content: "";
    background: rgba(0,0,0,0.6);
    position: absolute;
    top: 0; left:0 ;
    bottom: 0; right: 0; 
}
    

      body {
        
     font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        
        margin: 0;
        padding: 0;
      }

      .swiper-container {
        width: 100%;
        height: 100%;
      }



      .swiper-slide img {
        display: block;
        width:100%;
        margin-top:40px;
        height:80vh;
        object-fit: cover;
      }

     .content {
     position: absolute;
    top: 50%;  left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;

    margin: 20px;
      }

      .content a{
        padding: 6px 12px;
        color: #fff;
        background:  #006cbed0;
        cursor: pointer;
        border-radius: 20px;
        
      }
      .content p{
      margin: 10px;
      color: white;
      font-size: 14px;

      }
      .content h3 {
       margin: 5px;
       color: blue;
       font-size: 2rem;
      }
    </style>
  </head>

  <body>
    <!-- Swiper -->
    <section  class="home">
    <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="image">
                <img src="image/door-8453898_1920.jpg" alt="image/">
            </div>
            <div class="content">
                <h3>at vero at accusamus</h3>
                <p> Helping Business Security & peace of Mind for your Familly </p>
                <a href="<?=ROOT_URL?>contact.php" class="btn">Regist Now</a>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="image">
                <img src="image/photo-8434385_1920.jpg" alt="image/">
            </div>
            <div class="content">
                <h3>at vero at accusamus</h3>
                <p> Helping Business Security & peace of Mind for your Familly </p>
                <a href="<?=ROOT_URL?>contact.php" class="btn">Regist Now</a>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="image">
                <img src="image/bird-8437764_1920.jpg" alt="image/">
            </div>
            <div class="content">
                <h3>at vero at accusamus</h3>
                <p> Helping Business Security & peace of Mind for your Familly </p>
                <a href="<?=ROOT_URL?>contact.php" class="btn">Regist Now</a>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="image">
                <img src="image/door-8453898_1920.jpg" alt="image/">
            </div>
            <div class="content">
                <h3>at vero at accusamus</h3>
                <p> Helping Business Security & peace of Mind for your Familly </p>
                <a href="<?=ROOT_URL?>contact.php" class="btn">RegistNow</a>
            </div>
        </div>
        
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
    </section>

    
    
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