<?php
    class Quote{
        //DB Stuff
        private $conn;
        private $table = 'categories';

        //Quote Properties
        public $id;
        public $quote;
        public $author_id;
        public $category_id;

        // Constructor with DB
        public function __construct($db){
            $this->conn = $db;
        }

        //Get Quotes
        public function read(){

        }

        //Get Single Quote
        public function read_single(){

        }

        //Create Quote
        public function create(){

        }

        //Update Quote
        public function update(){

        }

        //Delete Quote
        public function delete(){

        }

}