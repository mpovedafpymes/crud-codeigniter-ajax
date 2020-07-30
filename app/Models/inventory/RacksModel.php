<?php namespace App\Models\inventory;

use CodeIgniter\Model;

/**
 * Class RacksModel
 */
class RacksModel extends Model
{
    protected $table      = 'racks';
    protected $primaryKey = 'id_rack';
    
    protected $allowedFields = [
        'rack'
    ];

        
    /**
     * Retorna todos los Racks
     * 
     * Estos son la estructura para almacenar los productos, 
     * conformando el segundo parametro de la ubicación
     * y su asignación es númerica
     * (warehouse, rack, section, division) 
     *
     * @return void
     */
    public function getAllRacks()
    {
        return $this->findAll();
    }
}