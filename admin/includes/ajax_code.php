<?php 
    require("init.php");

    $user= new User();

    if(isset($_POST['image_name'])){

        $use->ajax_save_user_image($_POST['image_name'], $_POST['user_id']);

    }


    if(isset($_POST['photo_id'])){

        Photo::display_sidebar_data('photo_id');

    }


?>