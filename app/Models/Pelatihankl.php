<?php namespace App\Models;
use CodeIgniter\Model;

class Pelatihankl extends Model
{
    protected $table = 'tb_data_2018';

    public function getUsers()
    {
        return $this->findAll();
    }
}