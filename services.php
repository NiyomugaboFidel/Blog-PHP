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

<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins';
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

.container1{
    min-height: 130vh;
    width: 100%;
    background-color: #006cbed0;
   
}

.sevices-wrapper{
    padding: 5% 8%;
    margin-top: 5rem;
    
}

.service{
    margin-top: 5rem;
    display: flex;
    flex-direction: column;
    align-items: center;
}

h1{
    color:#000 ;
    font-size: 5rem;
    -webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: transparent;
    letter-spacing: 4px;
    background-color: rgb(4, 52, 83);
    background: #fff;

    -webkit-text-fill-color: transparent;
    position: relative;
}

h1::after{
    content: "";
    position: absolute;
    top: 100%;
    left: 10%;
    height: 8px;
    width: 80%;
    border-radius: 8px;
    background-color: rgba(255,255,255,0.05);
}

h1 span{
    position: absolute;
    top: 100%;
    left: 10%;
    height: 8px;
    width: 8px;
    border-radius: 50%;
    background-color: #72e2ae;
    animation: anim 5s linear infinite;
}

@keyframes anim {
    95%{
        opacity: 1;
    }
    100%{
        opacity: 0;
        left: 90%;
    }
}

.cards{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 30px;
    margin-top: 80px;
}

.card{
    height: 300px;
    width: 340px;
    background-color: #1c2335;
    padding: 3% 8%;
    border: 0.2px solid rgba(114, 226, 174,0.2);
    border-radius: 8px;
    transition: .6s;
    display: flex;
    align-items: center;
    flex-direction: column;
    position: relative;
    overflow: hidden;
}

.card:after{
    content: "";
    position: absolute;
    top: 150%;
    left: -200px;
    width: 120px;
    transform: rotate(50deg);
    background-color: #fff;
    height: 18px;
    filter: blur(30px);
    opacity: 0.5;
    transition: 1s;
}

.card:hover:after{
    width: 225%;
    top: -100%;
}
.card i{
    color: #72e2ae;
    margin-top: 30px;
    margin-bottom: 20px;
    font-size: 4.8rem;
}

.card h2{
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    letter-spacing: 1px;
}    

.card p{
    text-align: center;
    width: 100%;
    margin: 12px 0;
    color: rgba(255,255,255,0.6);
}

.card:hover{
    background-color: transparent;
    transform: translateY(-8px);
    border-color: #00ff37;
}

.card:hover i{
    color: #00ff37;
}

@media screen and (max-width:1200px){
    .cards{
        grid-template-columns: repeat(2,1fr);
    }
}
@media screen and (max-width:900px){
    .cards{
        grid-template-columns: repeat(1,1fr);

    }
    h1{
        font-size: 3.5rem;
    }
}
</style>
    <nav>
        <div class="container nav__container">
        
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

    <div class="container1">
        <div class="service-wrapper">
            <div class="service">
                <h2>Services <span></span></h2>
                <div class="cards">
                <div class="card">
                    <i class="fa-brands fa-chromecast"></i>
                    <h2>business strategy</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi provident iure consequatur excepturi voluptatibus quis assumenda tenetur perferendis nobis praesentium?</p>
                </div>
                <div class="card">
                    <i class="fa-solid fa-layer-group"></i>
                    <h2>website development</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi provident iure consequatur excepturi voluptatibus quis assumenda tenetur perferendis nobis praesentium?</p>
                </div>
                <div class="card">
                    <i class="fa-solid fa-user-group"></i>
                    <h2>marketing and reporting</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi provident iure consequatur excepturi voluptatibus quis assumenda tenetur perferendis nobis praesentium?</p>
                </div>
                <div class="card">
                    <i class="fa-solid fa-desktop"></i>
                    <h2>mobile development</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi provident iure consequatur excepturi voluptatibus quis assumenda tenetur perferendis nobis praesentium?</p>
                </div>
                <div class="card">
                    <i class="fa-solid fa-camera"></i>
                    <h2>graphic design</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi provident iure consequatur excepturi voluptatibus quis assumenda tenetur perferendis nobis praesentium?</p>
                </div>
                <div class="card">
                    <i class="fa-solid fa-gear"></i>
                    <h2>other</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi provident iure consequatur excepturi voluptatibus quis assumenda tenetur perferendis nobis praesentium?</p>
                </div>
            </div>
            </div>
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