<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tasks extends CI_Controller {

	public function index()
	{
		phpinfo();
	}

	public function processwalks() {
		$handle = fopen(dirname(__FILE__)."/../../data/walks.csv",'r') or die();

		$data = fgetcsv($handle);

		$this->load->model('walks_model');

		while ( ($data = fgetcsv($handle) ) !== FALSE ) {
			$data = array(
				'coordinator-name' => $data[0],
				'coordinator-phone' => $data[1],
				'coordinator-email' => $data[2],
				'walk-webpage' => $data[3],
				'local-network-area' => $data[4],
				'local-network-enquiries' => $data[5],
				'local-network-phone' => $data[6],
				'local-network-email' => $data[7],
				'id' => $data[8],
				'walk-name' => $data[9],
				'walk-day' => $data[10],
				'walk-time' => $data[11],
				'meeting-frequency' => $data[12],
				'meet-point' => $data[13],
				'meet-address-1' => $data[14],
				'meet-address-2' => $data[15],
				'town' => $data[16],
				'postcode' => str_replace(' ' , '', $data[17]),
				'uprn' => $data[18]
			);

			$this->walks_model->insert($data);
		}
	}

	public function processfoods() {
		$handle = fopen(dirname(__FILE__)."/../../data/food.csv",'r') or die();

		$data = fgetcsv($handle);

		$this->load->model('eatingplaces_model');

		while ( ($data = fgetcsv($handle) ) !== FALSE ) {
			$data = array(
				'ExtractDate' => $data[0],
				'FHRSID' => $data[1],
				'BusinessName' => $data[2],
				'BusinessType' => $data[3],
				'BusinessTypeID' => $data[4],
				'AddressLine2' => $data[5],
				'AddressLine3' => $data[6],
				'PostCode' => $data[7],
				'RatingDate' => $data[8],
				'Longitude' => $data[9],
				'Latitude' => $data[10],
			);

			$this->eatingplaces_model->insert($data);
		}
	}
}

/* End of file tasks.php */
/* Location: ./application/controllers/tasks.php */