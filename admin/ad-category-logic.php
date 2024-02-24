<?php 
require 'config/database.php';

if(isset($_POST['submit'])) {
    // get form data 
    $title = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_SPECIAL_CHARS);

    if(!$title) {
        $_SESSION['ad-category'] = "Enter title";

    } elseif (!$description) {
      $_SESSION['ad-category'] = "Enter description";
    }
     
    // redirect back to add category page with form data there was invalid input 
    
    if(isset($_SESSION['ad-category'])) {
        $_SESSION['ad-category-data'] = $_POST;
        header('location ' . ROOT_URL . 'admin/ad-category.php');
        die();
    } else {
        //insert category into database 
        $query = "INSERT INTO categories (title, description) VALUES ('$title',' $description')";
        $result = mysqli_query($connection, $query);
        if(mysqli_errno($connection)) {
            $_SESSION['ad-category'] = "Couldn't add category";
            header('location: ' . ROOT_URL . 'admin/ad-category.php');
             die();
        } else {
            $_SESSION['ad-category-success'] = "$title added successfully";
            header('location: ' . ROOT_URL . 'admin/manage-categories.php');
            die();
        }
    }
}     