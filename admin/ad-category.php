
<?php
 include 'partials/header.php';
 // get back form data if invalid
 $title = $_SESSION['ad-category-data']['title']?? null;
 $description = $_SESSION['ad-category-data']['description']?? null;

 unset($_SESSION['ad-category-data']);
 ?> 

<section class="form__section">
    <div class="container form__section-container">
        <h2>Add category</h2>
       <?php if (isset($_SESSION['ad-category'])) : ?>
        <div class="alert__message error">
            <p>
                <?= $_SESSION['ad-category'];
                unset($_SESSION['ad-category']) ?>

            </p>
        </div>

        <?php endif ?>

        <form action="<?= ROOT_URL ?>admin/ad-category-logic.php" method="POST">
            <input type="text" value="<?=$title?>" name="title" placeholder="Title">
            <textarea rows="8" value="<?=$description?>" name="description" placeholder=" Description..........."></textarea>

            <button type="submit"  name="submit" class="btn">Add category</button>
        </form>
    </div>
</section>


<?php
 include '../partials/footer.php';
 ?>