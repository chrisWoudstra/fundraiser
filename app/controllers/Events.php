<?php

class Events extends Controller {

    public function index() {
        $data = [];

        $this->view('events/index', $data);
    }
}