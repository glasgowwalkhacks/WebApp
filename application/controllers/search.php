<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index($postcode = false)
	{
		if($this->input->post('txt_postcode')) {
			redirect(base_url().'search/'.strtoupper(str_replace(' ','',$this->input->post('txt_postcode'))).'/?distance='.$this->input->post('slt_range'));
		}

		if(!$postcode) {
			redirect(base_url());
			return;
		}

		$this->load->model('walks_model');

		if($this->input->get('distance')) {
			$distance = $this->input->get('distance');
		} else {
			$distance = 5; //5 KM Maximum
		}

		$viewData = array();

		$this->viewData['results'] = $this->walks_model->getWalksFromPostcode($postcode, $distance);

		if(!$this->viewData['results']) {
			redirect(base_url().'?no_postcode=true');
		}

		$viewData['main_view'] = $this->load->view('search/index', $this->viewData, true);

		$this->load->view('common/app', $viewData);

	}
}

/* End of file search.php */
/* Location: ./application/controllers/search.php */