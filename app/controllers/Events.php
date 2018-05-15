<?php

class Events extends Controller {

    private $eventModel;

    public function __construct() {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->eventModel = $this->model('Event');
    }

    public function index() {
        $events = $this->eventModel->getEvents();

        $data = [
            'events' => $events
        ];

        $this->view('events/index', $data);
    }

    public function add() {
        $data = [
            'name' => '',
            'foundation' => '',
            'description' => ''
        ];

        $this->view('events/add', $data);
    }
}