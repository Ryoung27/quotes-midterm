<?php
    class Author{
        //DB Stuff
        private $conn;
        private $table = 'authors';

        //Author Properties
        public $id;
        public $author;

        // Constructor with DB
        public function __construct($db){
            $this->conn = $db;
        }

        //Get Authors
        public function read(){
            //Create query
            $query = 'SELECT 
                        id,
                        author
                    FROM
                    ' . $this->table . '';

            // Prepare statement
            $stmt = $this->conn->prepare($query);

            // Execute query
            $stmt->execute();

            return $stmt;
        }

        //Get Single Author
        public function read_single(){

        }

        //Create Author
        public function create(){

        }

        //Update Author
        public function update(){

        }

        //Delete Author
        public function delete(){

        }

}