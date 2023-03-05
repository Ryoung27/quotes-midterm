<?php
    include_once '../../config/Database.php';
    include_once '../../models/Category.php';

    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate category object
    $category = new Category($db);

    // GET ID
    $category->id = isset($_GET['id']) ? $_GET['id'] : die();

    //Get post
    $category->read_single();

    //Create array
    $post_arr = array(
        'id'            => $category->id,
        'category'      => $category->category,
    );

    // Make JSON
    print_r(json_encode($post_arr));