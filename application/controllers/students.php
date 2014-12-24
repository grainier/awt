<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Students extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('formview');
    }

    public function getdetails()
    {
        if ($this->input->get('id')) {
            $id = $this->input->get('id');
        } else {
            $id = null;
        }

        if ($this->input->get('name')) {
            $name = $this->input->get('name');
        } else {
            $name = null;
        }

        if ($this->input->get('course')) {
            $course = $this->input->get('course');
        } else {
            $course = null;
        }

        $this->load->model('student_model');
        $data = $this->student_model->find($id);


        $this->load->view('idview', $data);
        $this->load->view('formview');
    }
}