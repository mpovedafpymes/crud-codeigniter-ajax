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

    public function selectHouses($searchTerm=""){
        // Fetch House
        $builder = $this->where("house like '%".$searchTerm."%' ");
        $fetched_records = $builder->get();
        $houses = $fetched_records->getResult('array');

        // Initialize Array with fetched data
        $data = array();
        foreach($houses as $house){
            $data[] = array("id"=>$house['id_house'], "text"=>$house['house']);
        }

        return $data;
    }
}