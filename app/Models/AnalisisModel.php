<?php

namespace App\Models;

use CodeIgniter\Model;

class AnalisisModel extends Model
{
    protected $table = 'hasil_analisis';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'judul', 'data_pdf', 'tgl'];

    public function getUsers()
    {
        return $this->db->table($this->table)->get()->getResultArray();
    }
    public function tambahdata($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
    // public function ubah($id)
    // {
    //     return $this->db->table($this->table)->where('id',$id)->get()->getRowArray();

    // }
    public function ubah($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }
    public function hapus($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
}
