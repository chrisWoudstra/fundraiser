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
        $reviews = $this->eventModel->getReviews($id);

        $data = [
            'event' => $event,
            'reviews' => $reviews
        ];

        $this->view('events/show', $data);
    }

    public function review($id) {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'rating' => trim($_POST['rating']),
                'review' => trim($_POST['review']),
                'event_id' => $id,
                'rating_err' => '',
                'review_err' => ''
            ];

            if (empty($data['rating'])) {
                $data['rating_err'] = 'Please enter rating';
            }
            if (empty($data['review'])) {
                $data['review_err'] = 'Please enter review';
            }

            if (empty($data['rating_err']) && empty($data['review_err'])) {
                if ($this->eventModel->userHasNotAlreadyReviewed($id)) {
                    if ($this->eventModel->addReview($data)) {
                        flash('event_message', 'Review Added');
                        redirect('events');
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    flash('event_message', 'You have already reviewed this event', 'alert alert-danger');
                    redirect('events');
                }
            } else {
                $this->view('events/review', $data);
            }

        } else {
            $data = [
                'rating' => '',
                'review' => '',
                'event_id' => $id
            ];
        }
        $this->view('events/review', $data);
    }
}