<?php namespace App\Models\inventory;

use CodeIgniter\Model;

class WarehousesModel extends Model
{
    protected $table      = 'warehouses';
    protected $primaryKey = 'id_warehouse';
    
    protected $allowedFields = [
        'warehouse', 
        'warehouse_type', 
        'state'
    ];

    protected $useTimestamps = true;

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    /**
     * Retorna todas las bodegas si no trae parametro id
     *
     * @param  mixed $id
     * @return void
     */
    public function getWarehouses($id = null)
    {
        if($id === null)
        {
            return $this->findAll();
        }

        return $this->asArray()->where(['id_warehouse' => $id])->first();
    }
}