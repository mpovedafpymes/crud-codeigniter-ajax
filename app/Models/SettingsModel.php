<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class SettingsModel
{
    protected $db;

    public function __construct(ConnectionInterface &$db){
        $this->db =& $db;
    }

    function getAllWarehouse(){
        $builder = $this->db->table('warehouses');
        $warehouses = $builder->get()->getResult();
        return $warehouses;
    }

    function getAllRacks(){
        $builder = $this->db->table('racks');
        $racks = $builder->get()->getResult();
        return $racks;
    }

    function getAllSections(){
        $builder = $this->db->table('sections');
        $sections = $builder->get()->getResult();
        return $sections;
    }

    function getAllDivisions(){
        $builder = $this->db->table('divisions');
        $divisions = $builder->get()->getResult();
        return $divisions;
    }

}