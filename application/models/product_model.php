<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

	public function lookup($paProductType)
	{
        $handle = $this->db->query("SELECT name FROM product_type WHERE name LIKE '$paProductType'");
        // $this->db->where('name', $paProductType);
        // $handle = $this->db->get('product_type');
        $returnData = array();

        // for testing we are adding passed value as the first element
        // $returnData[] = $paProductType;

        foreach ($handle->result() as $value) {
            $returnData[] = $value->name;
        }

        return $returnData;
	    // return array('Radio', 'FM', 'AM', $paProductType);
	}
}

/* End of file product_model.php */
/* Location: ./application/models/product_model.php */