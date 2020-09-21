<?php namespace App\Models;
use CodeIgniter\Model;

class KursilModel extends Model
{
    protected $table = 'kursil_modul';

    public function getUsers()
    {
        return $this->findAll();
    }
}