<?php namespace App\Controllers;
use App\Models\Home;
use App\Models\Pesertadr;
use App\Models\Pesertakl;
class Peserta extends BaseController
{
	public function index()
	  {
		echo view('datapeserta/v_menu');
    }
    public function hal2dr()
	{
		echo view('datapeserta/daring/v_hal2dr');
    }
    public function datamentahdr()
	{
        $users = new Pesertadr();
        $data = $users->getUsers();
		return view('datapeserta/daring/v_datamentah', compact('data'));
    }
    public function hal2kl()
	{
		echo view('datapeserta/klasikal/v_hal2kl');
    }
    public function datamentahkl()
	{
        $users = new Pesertakl();
        $data = $users->getUsers();
		return view('datapeserta/klasikal/v_datamentah', compact('data'));
    }
}