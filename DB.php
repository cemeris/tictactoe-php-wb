<?php
class DB
{
    private $con;
    private $table;

    public function __construct($table_name) {
        $this->table = $table_name;
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "tictactoe";

        // Create connection
        $this->con = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
        echo 'connection successful';
    }

    public function __destruct() {
        $this->con->close();
    }
}