<?php
class Pages extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function index() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('index', $data);
    }

    public function about() {
        $this->view('about');
    }

    public function gyik() {
        $data = [
            'title' => 'GYIK'
        ];

        $this->view('gyik');
    }

    public function kapcsolat() {
        $data = [
            'title' => 'kapcsolat'
        ];

        $this->view('kapcsolat');
    }

}
