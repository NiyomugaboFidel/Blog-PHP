
<?php
 include 'partials/header.php';

 // fetch categories form database 
 $query = "SELECT * FROM categories ORDER BY title ";
 $categories = mysqli_query($connection, $query);

 ?>

<section class="dashboard">

    
<?php if (isset($_SESSION['ad-category-success'])) : // shows if add category was successful ?>
        <div class="alert__message success container">
            <p>
                <?= $_SESSION['ad-category-success'];
                unset($_SESSION['ad-category-success']); 
                ?>
                 </p>
        </div> 
    
<?php elseif (isset($_SESSION['ad-category-'])) : // shows if add category was NOT successful ?>
        <div class="alert__message error container">
            <p>
                <?= $_SESSION['ad-category'];
                unset($_SESSION['ad-category']); 
                ?>
                 </p>
        </div> 
    
<?php elseif (isset($_SESSION['edit-category'])) : // shows if edit category was NOT successful ?>
        <div class="alert__message error container">
            <p>
                <?= $_SESSION['edit-category'];
                unset($_SESSION['edit-category']); 
                ?>
                 </p>
        </div> 
    
<?php elseif (isset($_SESSION['edit-category-success'])) : // shows if edit category was  successful ?>
        <div class="alert__message success container">
            <p>
                <?= $_SESSION['edit-category-success']; 
                unset($_SESSION['edit-category-success']); 
                ?>
                 </p>
        </div> 
    
<?php elseif (isset($_SESSION['delete-category-success'])) : // shows if delete category was  successful ?>
        <div class="alert__message success container">
            <p>
                <?= $_SESSION['delete-category-success']; 
                unset($_SESSION['delete -category-success']); 
                ?>
                 </p>
        </div> 
    <?php endif ?>
    <div class="container dashboard__container">
        <button id="show__sidebar btn" class="sidebar__toggle"><i class="fa-solid fa-right-long"></i></button>
        <button id="hide__sidebar btn" class="sidebar__toggle"><i class="fa-solid fa-left-long"></i></button>
        <aside>
            <ul>
                <li><a href="ad-post.php"><i class="fa-solid fa-pen-fancy"></i>
                <h5>Add post</h5>
                </a>
            </li>

            <li><a href="index.php"><i class="fa-solid fa-address-card"></i>
                <h5>Manage posts</h5>
                </a>
            </li>

            <?php if(isset($_SESSION['user_is_admin'])):?>
                <?php else : ?> 
            <li><a href="ad-user.php"><i class="fa-solid fa-user-plus"></i>
                <h5>Add User</h5>
                </a>
            </li>
          
            <li><a href="manage-user.php"><i class="fa-solid fa-users"></i>
                <h5>Manage User</h5>
                </a>
            </li>
          
            <li><a href="ad-category.php"><i class="fa-solid fa-pen-to-square"></i>
                <h5>Add Category</h5>
                </a> 
            </li>

            <li><a href="manage-categories.php" class="active"><i class="fa-solid fa-list"></i>
                <h5>Manage category</h5>
                </a>
            </li>
            <?php endif ?>
            </ul>
        </aside>
        <main>
            <h2>manage category</h2>
            <?php if(mysqli_num_rows($categories)> 0) : ?>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($category = mysqli_fetch_assoc($categories)) : ?>
                    <tr>
                       <td><?= $category['title'] ?></td> 
                       <td><a href="<?= ROOT_URL ?>admin/edit-category.php?id=<?=$category['id']?>" class="btn sm">Edit</a></td>
                       <td><a href="<?= ROOT_URL ?>admin/delete-category.php?id=<?=$category['id']?>" class="btn sm danger">Delete</a></td>
                    </tr>
                 <?php endwhile ?>
                </tbody>
            </table>
            <?php else : ?>
                <div class="alert__message error"><?= "NO Categories found"?></div>
                <?php endif ?>
        </main>
    </div>
</section>


<?php
 include '../partials/footer.php';
 
 ?>