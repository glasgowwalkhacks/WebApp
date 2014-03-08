<?php
class Walks_model extends MY_Model
{
    public $_table = 'walks';

    public function getWalksFromPostcode($postcode, $distance) {
    	$ci = get_instance();
    	$ci->load->model('postcodes_model');
    	$postcode = $ci->postcodes_model->get($postcode);
    	if($postcode) {
    		$latitude = $postcode->lat;
    		$longitude = $postcode->lng;
    	} else {
    		return false;
    	}

    	$qry = "SELECT *,(((acos(sin((".$latitude."*pi()/180)) * sin((`lat`*pi()/180))+cos((".$latitude."*pi()/180)) * cos((`lat`*pi()/180)) * cos(((".$longitude."- `lng`)*pi()/180))))*180/pi())*60*1.1515) as distance
				FROM `walks`
				left join postcodes on postcodes.postcode = walks.postcode
				WHERE distance >= ".$distance;

		return $ci->db->query($qry)->row();
    }
}