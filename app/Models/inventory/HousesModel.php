<?php namespace App\Models\inventory;

use CodeIgniter\Model;

class HousesModel extends Model
{
    protected $table      = 'houses';
    protected $primaryKey = 'id_house';
    
    protected $allowedFields = [
        'house', 
        'status'
    ];

    protected $useTimestamps = true;

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    /**
     * Retorna todas las casas si no trae parametro id
     *
     * @param  mixed $id
     * @return void
     */
    public function getHouses($id = null)
    {
        if($id === null)
        {
            return $this->findAll();
        }

        return $this->asArray()->where(['id_house' => $id])->first();
    }
}