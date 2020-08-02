<?php

namespace App\Models\inventory;

use CodeIgniter\Model;

class BrandsModel extends Model
{
    protected $table      = 'brands';
    protected $primaryKey = 'id_brand';

    protected $allowedFields = [
        'brand',
        'status',
        'house_id'
    ];

    protected $useTimestamps = true;

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    /**
     * Retorna todas las Marcas si no trae parametro id
     *
     * @param  mixed $id
     * @return void
     */
    public function getBrands($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->asArray()->where(['id_brand' => $id])->first();
    }
}