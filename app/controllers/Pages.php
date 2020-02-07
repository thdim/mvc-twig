<?php

  class Pages extends Controller {
    public function __construct() {
      // echo 'Pages loaded';

      // TEST
      $this->postModel = $this->model('Post');
    }

    public function index() {
      $data = [
        'title' => 'Welcome'
      ];
      $this->view('index', $data);
    }

    public function about() {
      $data = [
        'title' => 'About Us'
      ];
      $this->view('about', $data);
    }
  }