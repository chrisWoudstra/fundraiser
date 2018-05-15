<?php

class Event {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getEvents() {
        $this->db->query('SELECT * FROM events');

        return $this->db->resultSet();
    }

    public function addEvent($data) {

        $this->db->query('INSERT INTO events (name, foundation, body) 
                              VALUES (:name, :foundation, :body)');

        $this->db->bind(':name', $data['name']);
        $this->db->bind(':foundation', $data['foundation']);
        $this->db->bind(':body', $data['body']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getEventById($id) {
        $this->db->query('SELECT * FROM events WHERE id= :id');
        $this->db->bind(':id', $id);

        return $this->db->single();
    }
}