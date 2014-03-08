<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Walks extends CI_Controller {

	public function index($walkId)
	{
		$walkData = explode('-', $walkId);
		$walkId = $walkData[0];

		$this->load->model('walks_model');

		$walk = $this->walks_model->get($walkId);
	}
}

/* End of file walks.php */
/* Location: ./application/controllers/walks.php */