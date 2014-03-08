<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Postcodes extends CI_Controller {

	public function index()
	{
		$this->load->model('postcodes_model');

		header('Content-type: application/json');
		echo json_encode($this->postcodes_model->getClosest($this->input->get('lat'), $this->input->get('long')));
	}
}

/* End of file postcodes.php */
/* Location: ./application/controllers/postcodes.php */