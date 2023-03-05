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
                    ' . $this->table . '
                    ORDER BY
                        id ASC';

            // Prepare statement
            $stmt = $this->conn->prepare($query);

            // Execute query
            $stmt->execute();

            return $stmt;
        }

        //Get Single Category
        public function read_single(){
            //Create query
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
            $this->author = $row['category'];
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