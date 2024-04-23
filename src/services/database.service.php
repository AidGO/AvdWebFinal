<?php

class DatabaseService {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function fetchUser() {
        $query = "SELECT * FROM users";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchPageInfo() {
        $query = "SELECT * FROM pageinfo";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserById($id) {
        $query = "SELECT * FROM users WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->execute(array(':id' => $id));
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function createUser(string $username, string $pass) {
        $query = "INSERT INTO users (username, pass) VALUES (:username, :pass)";
        $statement = $this->db->prepare($query);
        return $statement->execute(array(':name' => $username, ':pass' => $pass));
    }

    public function updateUser($id, $name, $email) {
        $query = "UPDATE users SET name = :name, email = :email WHERE id = :id";
        $statement = $this->db->prepare($query);
        return $statement->execute(array(':id' => $id, ':name' => $name, ':email' => $email));
    }

    public function deleteUser($id) {
        $query = "DELETE FROM users WHERE id = :id";
        $statement = $this->db->prepare($query);
        return $statement->execute(array(':id' => $id));
    }
}