<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->load->view('welcome_message');
		$this->load->view('product_lookup');
	}

    public function find($value = null)
    {
        $this->load->model('Product_model');

        if ($this->input->post('PRODUCT_TYPE')) {
            $value = $this->input->post('PRODUCT_TYPE');
        } else {
            $value = null;
        }

        $data = array();    // this is optional
        $data['message'] = "Here is your result";
        $data['data'] = $this->Product_model->lookup($value);
        $this->load->view('product_display', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */