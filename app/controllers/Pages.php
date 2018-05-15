<?php

class Pages extends Controller {

    public function index() {

        if (isLoggedIn()) {
            redirect('events');
        }

        $data = [
            'title' => 'Home'
        ];

        $this->view('pages/index', $data);
    }

    public function fundraisers() {
        $data = ['title' => 'Fundraisers!'];
        $this->view('pages/fundraisers', $data);
    }
}