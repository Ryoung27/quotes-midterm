<?php
    class Category{
        //DB Stuff
        private $conn;
        private $table = 'categories';

        //Category Properties
        public $id;
        public $category;

        // Constructor with DB
        public function __construct($db){
            $this->conn = $db;
        }

        //Get Categories
        public function read(){
            //Create query
            $query = 'SELECT 
                        id,
                        category
                    FROM
                    ' . $this->table . '';

            // Prepare statement
            $stmt = $this->conn->prepare($query);

            // Execute query
            $stmt->execute();

            return $stmt;
        }

        //Get Single Category
        public function read_single(){

        }

        //Create Creatory
        public function create(){

        }

        //Update Creatory
        public function update(){

        }

        //Delete Creatory
        public function delete(){

        }

}