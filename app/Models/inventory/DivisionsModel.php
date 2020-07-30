<?php namespace App\Models\inventory;

use CodeIgniter\Model;

class DivisionsModel extends Model
{
    protected $table      = 'divisions';
    protected $primaryKey = 'id_division';
    
    protected $allowedFields = [
        'division'
    ];

        
    /**
     * Retorna todas las divisiones
     * 
     * Estas son las columnas de cada bloque del rack
     * conformando el cuarto parametro de la ubicación
     * y su asignación es númerica
     * (warehouse, rack, section, division) 
     *
     * @return void
     */
    public function getAllDivisions()
    {
        return $this->findAll();
    }
}