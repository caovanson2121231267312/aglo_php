<?php
namespace Caoson\Oop;

class DBConnection {  
    private $host = "localhost";
    private $username = "root"; 
    private $password = "12345678";
    private $db = "";
    private $conn;
    
    public function __construct()  
    {  
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db) or die(mysql_error("database"));
    }  

    public function execute($sql) {
        return mysqli_query($this->conn,$sql);
    }
    
    public function get($fields, $id = NULL, $table = NULL) {  
        $condition = !empty($id) ? " WHERE $id " : " ";
        $fields = !empty($fields) ? $fields : " * ";
        $sql = "SELECT $fields FROM $table $condition";
        $results = $this->execute($sql);
        $rows = $this->execute_result($results);  
        return $rows;  
    }

    public function execute_result($result) {
        $data = [];
        if ($result != null) {
            while ($row = mysqli_fetch_array($result, 1)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    
    public function execute_single_result($result) {
        $row = null;
        if ($result != null) {
            $row = mysqli_fetch_array($result, 1);
        }
        return $row;
    }
}  
?>