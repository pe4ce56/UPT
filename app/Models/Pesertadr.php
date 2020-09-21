<?php namespace App\Models;
use CodeIgniter\Model;

class Pesertadr extends Model
{
    protected $table = 'tb_daring';

    public function getUsers()
    {
        return $this->findAll();
    }
}