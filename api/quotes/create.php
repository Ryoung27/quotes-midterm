<?php
    // Headers
    
    include_once '../../config/Database.php';
    include_once '../../models/Quote.php';

    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate quote object
    $quote = new Quote($db);

    // Get raw posted data
    $data = json_decode(file_get_contents("php://input"));

    $quote->quote = $data->quote;
    $quote->author_id = $data->author_id;
    $quote->category_id = $data->category_id;
    $quote_id = $quote->create();

    //Create quote
    if($quote_id){
        //Create array
        $quote_arr = array(
            'id'            => $quote_id,
            'quote'         => $quote->quote,
            'author_id'     => $quote->author_id,
            'category_id'     => $quote->category_id,
        );

        // Make JSON
        print_r(json_encode($quote_arr));
    }else{
        echo json_encode(
            array('message' => 'Quote Not Created')
        );  
    }