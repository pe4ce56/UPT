<?php namespace App\Models;
use CodeIgniter\Model;

class AnalisisModel extends Model
{
    protected $table = 'hasil_analisis';

    public function getUsers()
    {
        return $this->findAll();
    }
}
?>