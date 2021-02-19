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

        $this->con = new mysqli($servername, $username, $password, $dbname);
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
    }

    public function __destruct() {
        $this->con->close();
    }

    public function get() {
      $sql = "SELECT id FROM `$this->table`";
      $result = $this->con->query($sql);
      
      if ($result) {
        if ($result->num_rows > 0) {
          echo "<table><tr>
          <th>ID</th>
          <th>URL</th>
          <th>Delete</th>
          </tr>";

          while($row = $result->fetch_assoc()):
            ?>
            <tr>
              <td><?=$row['id']?></td>
              <td><a href="?game-id=<?=$row['id']?>">Game</a></td>
            </tr>
           <?php
            $this->last_message = json_encode($row) . "<br>";
          endwhile;
          echo "</table>";
        } else {
          $this->last_message = "0 results";
        }
      }
      else {
        $this->last_message = "Result is wrong";
      }
  }

    public function set($entries) {
        $columns = '';
        $values = '';
        $i = 0;
        foreach ($entries as $key => $value) {
          $columns .= "`$key`";
          $values .= "'$value'";
          $i++;
          if (count($entries) > $i) {
            $columns .= ", ";
            $values .= ", ";
          }
        }
  
        $sql = "INSERT INTO `$this->table` ($columns) VALUES ($values);";
        $result = $this->con->query($sql);
        if ($result === true) {
          return $this->con->insert_id;
        }
        else {
          echo $this->con->error;
        }
      }
      
}