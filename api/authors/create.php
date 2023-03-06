<?php
    // Headers
    
    include_once '../../config/Database.php';
    include_once '../../models/Author.php';

    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate author object
    $author = new Author($db);

    // Get raw posted data
    $data = json_decode(file_get_contents("php://input"));

    $author->id = $data->id;
    $author->author = $data->author;

    //Create author
    if($author->create()){
        //Create array
        $author_arr = array(
            'id'            => $author->id,
            'author'        => $author->author,
        );

        // Make JSON
        print_r(json_encode($author_arr));
    }else{
        echo json_encode(
            array('message' => 'Author Not Created')
        );  
    }