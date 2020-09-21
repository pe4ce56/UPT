<?php namespace App\Models;
use CodeIgniter\Model;

class SertifikatWebinar extends Model
{
    protected $table = 'sertifikat_webinar';

    public function getUsers()
    {
        return $this->findAll();
    }
}