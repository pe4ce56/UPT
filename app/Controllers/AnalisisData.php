<?php

namespace App\Controllers;

use App\Models\AnalisisModel;

class AnalisisData extends BaseController
{
    public function __construct()
    {
        $this->Analisis = new AnalisisModel();
    }
    public function index()
    {
        //proteksi halaman
        if (session()->get('username') == '') {
            session()->setFlashdata('gagal', 'Anda Belum Login');
            return redirect()->to(base_url('login'));
        }
        //End
        $data = [
            // 'data' => $this->AnalisisModel->findAll()
            'data' => $this->Analisis->paginate(4, 'data'),
            'pager' => $this->Analisis->pager
        ];

        return view('hasilanalisisdata/v_analisis1', $data);
    }
    //hasilanalisis data
    public function admin()
    {
        //proteksi halaman
        if (session()->get('username') == '') {
            session()->setFlashdata('gagal', 'Anda Belum Login');
            return redirect()->to(base_url('login'));
        }
        //End
        session();
        $data = [
            // 'data' => $this->AnalisisModel->findAll()
            'validation' => \Config\Services::validation(),
            'data' => $this->Analisis->paginate(4, 'data'),
        ];

        return view('hasilanalisisdata/admin/v_analisis1', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[hasil_analisis.judul]',
                'errors' => [
                    'required' => '{field} judul harus diisi',
                    'is_unique' => '{field} Judul Sudah Ada'
                ]
            ],
            'data_pdf' => [
                'rules' => 'uploaded[data_pdf]|ext_in[data_pdf, pdf]',
                'errors' => [
                    'uploaded' => 'Pilih File Terlebih Dahulu',
                    'ext_in' => 'File Harus Berformat Pdf'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('admin')->withInput()->with('validation', $validation);
            return redirect()->to('admin')->withInput();
            // return redirect()->to('admin');
        }
        // ambil pdf
        $filepdf = $this->request->getFile('data_pdf');
        // pindahkan ke folder pdf
        $filepdf->move('pdf/pdf_data');
        // ambil nama file
        $namapdf = $filepdf->getName();

        $model = new AnalisisModel();
        $data = array(
            'judul'          => $this->request->getPost('judul'),
            'data_pdf'       => $namapdf,
            'tgl'            => $this->request->getPost('tgl'),
        );
        if ($model->tambahdata($data)) {
            session()->setFlashdata('success', true);
            session()->setFlashdata('msg', 'Data Berhasil Ditambah');
        } else {
            session()->setFlashdata('success', false);
            session()->setFlashdata('gagal', 'Data Gagal Ditambahkan');
        }
        return redirect()->to('admin');
    }
    //end
    public function edit()
    {
        $model = new AnalisisModel();
        $id = $this->request->getPost('id');
        $data = array(
            'judul'          => $this->request->getPost('judul'),
            'data_pdf'       => $this->request->getPost('data_pdf'),
            'tgl'            => $this->request->getPost('tgl'),
        );
        if ($model->ubah($data, $id)) {
            session()->setFlashdata('success', true);
            session()->setFlashdata('msg', 'Data Berhasil Diubah');
        } else {
            session()->setFlashdata('success', false);
            session()->setFlashdata('gagal', 'Data Gagal Diubah');
        }
        return redirect()->to('admin');
    }
    public function hapus($id)
    {
        $model = new AnalisisModel();
        if ($model->hapus($id)) {
            session()->setFlashdata('success', true);
            session()->setFlashdata('msg', 'Data Berhasil Dihapus');
        } else {
            session()->setFlashdata('success', false);
            session()->setFlashdata('gagal', 'Data Gagal Dihapus');
        }
    }
}
