<?php namespace App\Controllers;
use App\Models\Home;
use App\Models\Pelatihandr;
use App\Models\Pelatihankl;
class Pelatihan extends BaseController
{
	public function index()
	  {
		echo view('datapelatihan/v_menu');
    }
    public function hal2kl()
	{
		echo view('datapelatihan/klasikal/v_hal2kl');
    }
    public function datamentahkl()
	{
        $users = new Pelatihankl();
        $data = $users->getUsers();
		return view('datapelatihan/klasikal/v_datamentah', compact('data'));
    }
    public function hal2dr()
	{
		echo view('datapelatihan/daring/v_hal2dr');
    }
    public function datamentahdr()
	{
        $users = new Pelatihandr();
        $data = $users->getUsers();
		return view('datapelatihan/daring/v_datamentah', compact('data'));
    }
}