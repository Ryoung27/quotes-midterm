<?php
    class Database{
        private $host;
        private $port;
        private $dbname;
        private $username;
        private $password;
        private $conn;

        public function __construct(){
            $this->username = getenv('USERNAME');
            $this->password = getenv('PASSWORD'); 
            $this->dbname = getenv('DATABASE'); 
            $this->port = getenv('PORT'); 
            $this->host = getenv('HOST');
        }

        public function connect(){
            //instead of $this->conn = null;
            if($this->conn){
                //connection already exists, return it.
                return $this->conn;
            } else{
                $dsn = "postgres://{$this->username}:{$this->password}@{$this->host}" . ".oregon-postgres.render.com/{$this->dbname};";

                try {
                    $this->conn = new PDO($dsn, $this->username, $this->password);
                    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    return $this->conn;
                } catch(PDOException $e){
                    echo 'Connection Error: ' . $e->getMessage();
                }
            }
        }
    }