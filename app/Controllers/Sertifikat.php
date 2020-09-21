<?php namespace App\Controllers;
use App\Models\Home;
use App\Models\Sertifikatinhouse;
use App\Models\SertifikatKursil;
use App\Models\SertifikatPelatihan;
use App\Models\SertifikatWebinar;

class Sertifikat extends BaseController
{
	public function index()
	  {
		echo view('sertifikat/v_menu');
    }
    public function webinar()
	{
        $users = new SertifikatWebinar();
        $data = $users->getUsers();
		return view('sertifikat/webinar/v_webinar', compact('data'));
    }
    public function inhouse()
	{
        $users = new SertifikatInhouse();
        $data = $users->getUsers();
		return view('sertifikat/inhouse/v_inhouse', compact('data'));
    }
    public function kursil()
	{
        $users = new SertifikatKursil();
        $data = $users->getUsers();
		return view('sertifikat/kursil/v_kursil', compact('data'));
    }
    public function pelatihan()
	{
        $users = new SertifikatPelatihan();
        $data = $users->getUsers();
		return view('sertifikat/pelatihan/v_pelatihan', compact('data'));
    }
}