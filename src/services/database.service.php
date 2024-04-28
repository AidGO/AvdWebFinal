<?php

class DatabaseService {
    private $db;

    public function __construct($db) 
    {
        $this->db = $db;
    }

    public function fetchUser() 
    {
        $query = "SELECT * FROM users";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchPageInfo() 
    {
        $query = "SELECT * FROM pageinfo";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchSpecificPageInfo(string $page) 
    {
        $query = "SELECT * FROM pageinfo WHERE page = '$page'";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchID($id) 
    {
        $query = "SELECT * FROM pageinfo WHERE id = '$id'";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createRecord(string $page, string $title, string $content, string $languages, $link) 
    {
        $query = "INSERT INTO pageinfo (page, title, content, languages, link) VALUES (:page, :title, :content, :languages, :link)";
        $statement = $this->db->prepare($query);
        return $statement->execute(array(':page' => $page, ':title' => $title, ':content' => $content, ':languages' => $languages, ':link' => $link));
    }

    public function updateRecord($id, string $page, string $title, string $content, string $languages, $link) 
    {
        $query = "UPDATE pageinfo SET page = :page, title = :title, content = :content, languages = :languages, link = :link WHERE id = :id";
        $statement = $this->db->prepare($query);
        return $statement->execute(array(':id' => $id, ':page' => $page, ':title' => $title, ':content' => $content, ':languages' => $languages, ':link' => $link));
    }

    public function deleteRecord($id) 
    {
        $query = "DELETE FROM pageinfo WHERE id = :id";
        $statement = $this->db->prepare($query);
        return $statement->execute(array(':id' => $id));
    }
}