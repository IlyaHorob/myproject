<?php


class User
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '3232698qwerT';
    private $dbname = 'personal';
    private $link;
    
    public function __construct()
    {
        $this->link = new mysqli($this->host, $this->username, $this->password);
        if (!empty($this->link->connect_error)) {
            die($this->link->connect_error);
        }
        if (!$this->link->select_db($this->dbname)) {
            die($this->link->error);
        }
        $this->link->query('SET NAMES utf8');
    }
    
    public function getUsers()
    {
        $query = 'SELECT * FROM workers';
        $result = $this->link->query($query);
        if (!$result) {
            die($this->link->error);
        }
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        
        return $users;
    }
    
    public function getUserById($userId)
    {
        $query = 'SELECT * FROM workers WHERE id=?';
        $stmt = $this->link->prepare($query);
        $stmt->bind_param('d', $userId);
        $result = $stmt->execute();
        if (!$result) {
            die($stmt->error);
        }
        $stmt->bind_result($id, $name, $age, $salary);
        
        $user = [];
        while ($stmt->fetch()) {
            $user = [
                'id' => $id,
                'name' => $name,
                'age' => $age,
                'salary' => $salary,
            ];
        }
        
        return $user;
    }
}
