<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index($postcode)
	{
		$this->load->model('walks_model');

		$data = $this->walks_model->getWalksFromPostcode($postcode, 500);

		var_dump($data); die();
	}
}

/* End of file search.php */
/* Location: ./application/controllers/search.php */