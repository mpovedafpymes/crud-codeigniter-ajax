<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class NavigationModel
{
    protected $db;
    
    public function __construct(ConnectionInterface &$db){
        $this->db =& $db;
    }

    function getAllNavigation(){
        $builder = $this->db->table('modules_nav')->join('sections_nav', 'sections_nav.module_id = modules_nav.id_module', 'LEFT');
        $navigation = $builder->get()->getResult();
        return $navigation;
    }
}