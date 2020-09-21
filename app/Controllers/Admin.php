<?php namespace App\Controllers;
use App\Models\AnalisisModel;
class Admin extends BaseController
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
			'isi' => 'v_home2'
		];
		echo view('layout/v_wrapper', $data);
	}
	//hasilanalisis data
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
		return view('hasilanalisisdata/admin/v_analisis1', compact('data'));
	}
	public function tambahpdf()
	{
		echo view('hasilanalisisdata/admin/v_tambah');
	}
	//end
	
}
