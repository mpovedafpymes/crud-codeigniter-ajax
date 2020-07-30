<?php namespace App\Models\inventory;

use CodeIgniter\Model;

class SectionsModel extends Model
{
    protected $table      = 'sections';
    protected $primaryKey = 'id_section';
    
    protected $allowedFields = [
        'section'
    ];

        
    /**
     * Retorna todas las secciones
     * 
     * Estos son las filas de cada piso del rack
     * conformando el tercer parametro de la ubicación
     * y su asignación en el alfabeto
     * (warehouse, rack, section, division) 
     *
     * @return void
     */
    public function getAllSections()
    {
        return $this->findAll();
    }
}