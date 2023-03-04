<?php
    class Quote{
        //DB Stuff
        private $conn;
        private $table = 'quotes';

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
            //Create query
            $query = 'SELECT 
                        quotes.id,
                        quotes.quote,
                        authors.author,
                        categories.category
                    FROM
                    ' . $this->table . '
                    LEFT JOIN
                        authors ON quotes.author_id = authors.id
                    LEFT JOIN
                        categories ON quotes.category_id = categories.id
                    ';
            // Prepare statement
            $stmt = $this->conn->prepare($query);

            // Execute query
            $stmt->execute();

            return $stmt;
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