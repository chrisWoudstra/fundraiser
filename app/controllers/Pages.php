<?php

class Pages extends Controller {

    public function index() {

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