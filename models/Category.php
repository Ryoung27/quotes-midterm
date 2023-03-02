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