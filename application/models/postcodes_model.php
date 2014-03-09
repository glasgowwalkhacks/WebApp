<?php
class Postcodes_model extends MY_Model
{
    public $_table = 'postcodes';
    public $primary_key = 'postcode';

    public function getClosest($latitude, $longitude) {
    	$sql = "select *, (((acos(sin((".$latitude."*pi()/180)) * sin((`lat`*pi()/180))+cos((".$latitude."*pi()/180)) * cos((`lat`*pi()/180)) * cos(((".$longitude."- `lng`)*pi()/180))))*180/pi())*60*1.1515) as distance from postcodes
    			order by (((acos(sin((".$latitude."*pi()/180)) * sin((`lat`*pi()/180))+cos((".$latitude."*pi()/180)) * cos((`lat`*pi()/180)) * cos(((".$longitude."- `lng`)*pi()/180))))*180/pi())*60*1.1515) asc limit 1";

    	return get_instance()->db->query($sql)->row();
    }
}