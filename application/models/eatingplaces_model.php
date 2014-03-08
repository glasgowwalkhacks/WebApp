<?php
class Eatingplaces_model extends MY_Model
{
    public $_table = 'eatingplaces';

    public function getPlacesFromPostcode($latitude, $longitude) {
    	$ci = get_instance();

        //get distance in kilometres
        $qry = "SELECT *,(((acos(sin((".$latitude."*pi()/180)) * sin((`Latitude`*pi()/180))+cos((".$latitude."*pi()/180)) * cos((`Latitude`*pi()/180)) * cos(((".$longitude."- `Longitude`)*pi()/180))))*180/pi())*60*1.1515) as distance
                FROM `eatingplaces`
                order by (((acos(sin((".$latitude."*pi()/180)) * sin((`Latitude`*pi()/180))+cos((".$latitude."*pi()/180)) * cos((`Latitude`*pi()/180)) * cos(((".$longitude."- `Longitude`)*pi()/180))))*180/pi())*60*1.1515) asc
                limit 20";

        return $ci->db->query($qry)->result_array();
    }
}