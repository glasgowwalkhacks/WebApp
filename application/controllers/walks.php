<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Walks extends CI_Controller {

	public function index($walkId)
	{
		$walkData = explode('-', $walkId);
		$walkId = $walkData[0];

		$this->load->model('walks_model');
		$this->load->model('postcodes_model');
		$this->load->model('eatingplaces_model');

		$this->viewData = array();

		$this->viewData['walk'] = $this->walks_model->get($walkId);
		$this->viewData['postcode'] = $this->postcodes_model->get($this->viewData['walk']->postcode);
		$this->viewData['nearby'] = $this->eatingplaces_model->getPlacesFromPostcode($this->viewData['postcode']->lat, $this->viewData['postcode']->lng);

		$viewData['main_view'] = $this->load->view('walks/walk', $this->viewData, true);

		$this->load->view('common/app', $viewData);
	}
}

/* End of file walks.php */
/* Location: ./application/controllers/walks.php */