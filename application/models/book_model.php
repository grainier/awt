<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Book_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function search($type, $genre, $subgenre)
    {
        $bookData = array();
        $where = array();

        if ($type != '') {
            $where['type'] = $type;
        }

        if ($genre != '') {
            $where['genre_id'] = $genre;
        }

        if ($subgenre != '') {
            $where['subgenre_id'] = $subgenre;
        }

        if (count($where) > 0) {
            $this->db->where($where);
        } else {

        }

        $res = $this->db->get('book');

        foreach ($res->result_array() as $value) {
            $bookData[] = $value;
        }

        return $bookData;
    }
}

/* End of file book_model.php */
/* Location: ./application/models/book_model.php */