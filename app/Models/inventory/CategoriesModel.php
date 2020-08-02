<?php namespace App\Models\inventory;

use CodeIgniter\Model;

class CategoriesModel extends Model
{
    protected $table      = 'categories';
    protected $primaryKey = 'id_category';
    
    protected $allowedFields = [
        'category', 
        'status'
    ];

    protected $useTimestamps = true;

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    /**
     * Retorna todas las categorías si no trae parametro id
     *
     * @param  mixed $id
     * @return void
     */
    public function getCategories($id = null)
    {
        if($id === null)
        {
            return $this->findAll();
        }

        return $this->asArray()->where(['id_category' => $id])->first();
    }
}