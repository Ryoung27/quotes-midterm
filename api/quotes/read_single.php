<?php
    include_once '../../config/Database.php';
    include_once '../../models/Quote.php';

    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate quote object
    $quote = new Quote($db);

    // GET ID
    $quote->id = isset($_GET['id']) ? $_GET['id'] : die();

    //Get quote
    $quote->read_single();

    //Create array
    if((isset($quote->id) && isset($quote->quote))){
    $quote_arr = array(
        'id'            => $quote->id,
        'quote'         => $quote->quote,
        'author'        => $quote->author,
        'category'      => $quote->category,
    );

    // Make JSON
    print_r(json_encode($quote_arr));
    }else{
        print_r(json_encode(array("message" => "No Quotes Found")));
    }
