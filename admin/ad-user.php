<?php
 include 'partials/header.php';

 // get back form data if there was an error
 $firstname = $_SESSION['ad-user-data']['firstname']?? null;
 $lastname = $_SESSION['ad-user-data']['lastname']?? null;
 $username = $_SESSION['ad-user-data']['username']?? null;
 $email = $_SESSION['ad-user-data']['email']?? null;
 $createpassword = $_SESSION['ad-user-data']['createpassword']?? null;
 $confirmpassword= $_SESSION['ad-user-data']['confirmpassword']?? null;
 

// delete session data
unset($_SESSION['ad-user-data']);
 ?>
<section class="form__section">
    <div class="container form__section-container">
        <h2>Add User</h2>
       <?php if(isset($_SESSION['ad-user'])): ?>

        <div class="alert__message error">
            <p>
                <?= $_SESSION['ad-user'];
                unset($_SESSION['ad-user']);
                ?>

                 </p>
        </div>

        <?php endif ?>

        <form  method="POST" action="<?=ROOT_URL?>admin/ad-user-logic.php" enctype="multipart/form-data">
             <input type="text" value="<?=$firstname?>" name="firstname" placeholder="First Name">
            <input type="text" value="<?=$lastname?>" name="lastname" placeholder="Last Name">
            <input type="text"  value="<?=$username?>" name="username"placeholder=" Username">
            <input type="email"  value="<?=$email?>" name="email" placeholder="Email">
            <input type="password"  value="<?=$createpassword ?>" name="createpassword" placeholder="Create password">
            <input type="password"  value="<?=$confirmpassword?>" name="confirmpassword" placeholder="confirm password">

            <select name="userrole">
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>

            <div class="form__control">
                <label for="avatar"></label>
                <input type="file"  name="avatar" id="avatar">
            </div>
            <button type="submit" name="submit"class="btn">add User</button>
        </form>
    </div>
</section>

<?php
 include '../partials/footer.php';
 ?>