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
        switch ($http_verb) {
            case 'GET':
                $this->find();
                break;
            case 'PUT':
                $this->insert_book();
                break;
            case 'DELETE':
                $this->delete_book();
                break;
            default:
                echo "Oops";
                break;
        }
    }

    private function insert_book() {
        $type = "";
        $genre = "";
        $subgenre = "";
        $title = "";

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

        if(isset($arguments['title'])) {
            $title = $arguments['title'];
        }

        $this->load->model('book_model');

        $result = $this->book_model->insert_book($title, $type, $genre, $subgenre);

        // it's better to load a view here instead of echoing this here
        if ($result) {
            echo json_encode(array(
                'status' => 1,
                'desc' => 'book inserted'
            ));
        } else {
            echo json_encode(array(
                'status' => 0,
                'desc' => 'insert failed'
            ));
        }
    }

    private function delete_book() {
        $type = "";
        $genre = "";
        $subgenre = "";
        $title = "";

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

        if(isset($arguments['title'])) {
            $title = $arguments['title'];
        }

        $this->load->model('book_model');

        $result = $this->book_model->delete_book($title, $type, $genre, $subgenre);

        // it's better to load a view here instead of echoing this here
        if ($result) {
            echo json_encode(array(
                'status' => 1,
                'desc' => 'book deleted'
            ));
        } else {
            echo json_encode(array(
                'status' => 0,
                'desc' => 'delete failed'
            ));
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