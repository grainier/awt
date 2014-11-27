<?php

/**
 * Created by PhpStorm.
 * User: grainier
 * Date: 11/27/14
 * Time: 11:28 AM
 */
class Library extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function _remap() {
        $http_verb = $this->input->server('REQUEST_METHOD');
        if ($http_verb == 'GET') {
            $this->find();
        }
    }

    public function find()
    {
        $type = '';
        $genre = '';
        $subgenre = '';

        $arguments = $this->uri->uri_to_assoc(2);

        if(isset($arguments['type'])) {
            $type = $arguments['type'];
        }

        if(isset($arguments['genre'])) {
            $genre = $arguments['genre'];
        }

        if(isset($arguments['subgenre'])) {
            $subgenre = $arguments['subgenre'];
        }

        $this->load->model('book_model');

        $data['books'] = $this->book_model->search($type, $genre, $subgenre);

        //var_dump($data);

        $this->load->view('book_view', $data);

    }
}