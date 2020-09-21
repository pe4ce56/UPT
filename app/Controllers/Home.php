<?php namespace App\Controllers;
use App\Models\AnalisisModel;
class Home extends BaseController
{
	public function index()
	{
		//proteksi halaman
		if (session()->get('username')=='') {
			session()->setFlashdata('gagal','Anda Belum Login');
            return redirect()->to(base_url('login'));
		}
		//End
		$data=[
			'title' => 'Home',
			'isi' => 'v_home'
		];
		echo view('layout/v_wrapper', $data);
	}
	
	//--------------------------------------------------------------------
	public function hasilanalisis()
	{
		//proteksi halaman
		if (session()->get('username')=='') {
			session()->setFlashdata('gagal','Anda Belum Login');
            return redirect()->to(base_url('login'));
		}
		//End
		$users = new AnalisisModel();
		$data = $users->getUsers();
		return view('hasilanalisisdata/v_analisis1', compact('data'));
	}
	
}
