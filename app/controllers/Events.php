<?php

class Events extends Controller {

    private $eventModel;
    private $userModel;

    public function __construct() {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
        $this->eventModel = $this->model('Event');
        $this->userModel = $this->model('User');
    }

    public function index() {
        $events = $this->eventModel->getEvents();

        $data = [
            'events' => $events
        ];

        $this->view('events/index', $data);
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']),
                'foundation' => trim($_POST['foundation']),
                'body' => trim($_POST['body']),
                'name_err' => '',
                'foundation_err' => '',
                'body_err' => ''
            ];

            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter name';
            }
            if (empty($data['foundation'])) {
                $data['foundation_err'] = 'Please enter foundation';
            }
            if (empty($data['body'])) {
                $data['body_err'] = 'Please enter description';
            }

            if (empty($data['name_err']) && empty($data['foundation_err']) && empty($data['body_err'])) {
                if ($this->eventModel->addEvent($data)) {
                    flash('event_message', 'Event Added');
                    redirect('events/index');
                } else {
                    die('Something went wrong');
                }
            } else {
                $this->view('events', $data);
            }

        } else {
            $data = [
                'name' => '',
                'foundation' => '',
                'body' => ''
            ];
        }
        $this->view('events/add', $data);
    }

    public function show($id) {
        $event = $this->eventModel->getEventById($id);

        $data = [
            'event' => $event
        ];

        $this->view('events/show', $data);
    }
}