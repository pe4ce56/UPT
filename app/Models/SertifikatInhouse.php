<?php namespace App\Models;
use CodeIgniter\Model;

class SertifikatInhouse extends Model
{
    protected $table = 'sertifikat_inhouse';

    public function getUsers()
    {
        return $this->findAll();
    }
}