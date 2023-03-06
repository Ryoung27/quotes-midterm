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
        public $author;
        public $category;

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
                WHERE id = ?
                LIMIT 1';

            $query = 'SELECT 
                        id,
                        category
                    FROM
                ' . $this->table . '
                WHERE
                id = ?
            LIMIT 1';

            //Prepare statement
            $stmt = $this->conn->prepare($query);

            //Bind Id
            $stmt->bindParam(1, $this->id);

            // Execute query
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            //Set Properties
            $this->id = $row['id'];
            $this->quote = $row['quote'];
            $this->author = $row['author'];
            $this->category = $row['category'];
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