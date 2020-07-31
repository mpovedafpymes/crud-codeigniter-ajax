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

    protected $useTimestamps = true;

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

}