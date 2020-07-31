<?php namespace App\Models\inventory;

use CodeIgniter\Model;

class DivisionsModel extends Model
{
    protected $table      = 'divisions';
    protected $primaryKey = 'id_division';
    
    protected $allowedFields = [
        'division'
    ];
}