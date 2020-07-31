<?php namespace App\Models\inventory;

use CodeIgniter\Model;

class SectionsModel extends Model
{
    protected $table      = 'sections';
    protected $primaryKey = 'id_section';
    
    protected $allowedFields = [
        'section'
    ];
}