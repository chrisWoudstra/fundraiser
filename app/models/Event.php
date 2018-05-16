<?php

class Event {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getEvents() {
        $this->db->query("SELECT E.*,
                                     (SELECT (sum(rating)/count(rating)) 
                                      FROM reviews 
                                      WHERE event_id = E.id) as avgRating
                              FROM events E
                              ORDER BY avgRating DESC");

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

    public function addReview($data) {

        $this->db->query('INSERT INTO reviews (event_id, user_id, rating, review, created_at) 
                              VALUES (:event_id, :user_id, :rating, :review, NOW())');

        $this->db->bind(':event_id', intval($data['event_id']));
        $this->db->bind(':user_id', $_SESSION['user_id']);
        $this->db->bind(':rating', intval($data['rating']));
        $this->db->bind(':review', $data['review']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getEventById($id) {
        $this->db->query('SELECT * FROM events WHERE id = :id');

        $this->db->bind(':id', $id);

        return $this->db->single();
    }

    public function getReviews($eventId) {
        $this->db->query("SELECT R.rating,
                                     R.review,
                                     U.name,
                                     DATE_FORMAT(R.created_at, '%M %D, %Y') as reviewDate
                              FROM reviews R 
                                INNER JOIN users U on R.user_id = U.id
                              WHERE R.event_id = :event_id
                              ORDER BY R.created_at DESC");

        $this->db->bind(':event_id', $eventId);

        return $this->db->resultSet();
    }

    public function userHasNotAlreadyReviewed($eventId) {

        $this->db->query("SELECT * FROM reviews WHERE event_id = :event_id AND user_id = :user_id");

        $this->db->bind(':event_id', $eventId);
        $this->db->bind(':user_id', $_SESSION['user_id']);

        if (empty($this->db->single())) {
            return true;
        } else {
            return false;
        }
    }
}