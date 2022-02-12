<?php
namespace Usermgmt\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

class User extends Entity {

    public function _getFullName(){
        return $this->first_name . ' ' . $this->last_name . ' ' . $this->clast_name;
    }

    public function _getCities(){

    	$cities = [];
    	foreach ($this->user_cities as $city) {
    		$cities[] = $city->city->name;
    	}

        return implode(', ', $cities);
    }

    public function _getZonas(){

        $zonas = [];
        foreach ($this->user_zonas as $zona) {
            $zonas[] = $zona->zona->name;
        }

        return implode(', ', $zonas);
    }

}