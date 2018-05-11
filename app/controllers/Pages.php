<?php

class Pages extends Controller {

    public function __construct() {

    }

    public function index() {

        $data = [
            'title' => 'Fundraiser'
        ];

        $this->view('pages/index', $data);
    }

    public function fundraisers() {
        $this->view('pages/fundraisers');
    }
}