<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function find($id) {
        return array(
            'student_id' => '2011114',
            'name' => 'grainier',
            'course' => 'AWT web'
        );
    }

}