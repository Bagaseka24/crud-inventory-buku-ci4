<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BukuModel;

class Buku extends Controller
{
    /**
     * index function
     */
    public function index()
    {
        //model initialize
        $bukuModel = new BukuModel();

        //pager initialize
        $pager = \Config\Services::pager();

        $data = array(
            'buku' => $bukuModel->paginate(6, 'buku'),
            'pager' => $bukuModel->pager
        );

        return view('buku-index', $data);
    }

     /**
     * create function
     */
    public function create()
    {
        return view('buku-create');
    }

    /**
     * store function
     */
    public function store()
    {
        //load helper form and URL
        helper(['form', 'url']);
         
        //define validation
        $validation = $this->validate([
            'namabuku' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Judul Buku.'
                ]
            ],
            'jenisbuku'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Kategori Buku.'
                ]
            ],
            'tahunterbit'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Tahun Terbit Buku.'
                ]
            ],
            'penulis'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Penulis Buku.'
                ]
            ],
            'penerbit'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Penerbit Buku.'
                ]
            ],
            'isbn'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan ISBN Buku.'
                ]
            ],
        ]);

        if(!$validation) {

            //render view with error validation message
            return view('buku-create', [
                'validation' => $this->validator
            ]);

        } else {

             //model initialize
            $bukuModel = new BukuModel();
            
            //insert data into database
            $bukuModel->insert([
                'namabuku'   => $this->request->getPost('namabuku'),
                'jenisbuku' => $this->request->getPost('jenisbuku'),
                'tahunterbit' => $this->request->getPost('tahunterbit'),
                'penulis' => $this->request->getPost('penulis'),
                'penerbit' => $this->request->getPost('penerbit'),
                'isbn' => $this->request->getPost('isbn'),
            ]);

            //flash message
            session()->setFlashdata('message', 'Buku Berhasil Disimpan');

            return redirect()->to(base_url('buku'));
        }

    }

    /**
     * edit function
     */
    public function edit($id)
    {
        //model initialize
        $bukuModel = new BukuModel();

        $data = array(
            'buku' => $bukuModel->find($id)
        );

        return view('buku-edit', $data);
    }

    /**
     * update function
     */
    public function update($id)
    {
        //load helper form and URL
        helper(['form', 'url']);
         
        //define validation
        $validation = $this->validate([
            'namabuku' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Judul Buku.'
                ]
            ],
            'jenisbuku'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Kategori Buku.'
                ]
            ],
            'tahunterbit'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Tahun Terbit Buku.'
                ]
            ],
            'penulis'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Penulis Buku.'
                ]
            ],
            'penerbit'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Penerbit Buku.'
                ]
            ],
            'isbn'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan ISBN Buku.'
                ]
            ],
        ]);

        if(!$validation) {

            //model initialize
            $bukuModel = new BukuModel();

            //render view with error validation message
            return view('buku-edit', [
                'buku' => $bukuModel->find($id),
                'validation' => $this->validator
            ]);

        } else {

            //model initialize
            $bukuModel = new BukuModel();
            
            //insert data into database
            $bukuModel->update($id, [
                'namabuku'   => $this->request->getPost('namabuku'),
                'jenisbuku' => $this->request->getPost('jenisbuku'),
                'tahunterbit' => $this->request->getPost('tahunterbit'),
                'penulis' => $this->request->getPost('penulis'),
                'penerbit' => $this->request->getPost('penerbit'),
                'isbn' => $this->request->getPost('isbn'),
            ]);

            //flash message
            session()->setFlashdata('message', 'Buku Berhasil Diupdate');

            return redirect()->to(base_url('buku'));
        }

    }

    /**
     * delete function
     */
    public function delete($id)
    {
        //model initialize
        $bukuModel = new BukuModel();

        $buku = $bukuModel->find($id);

        if($buku) {
            $bukuModel->delete($id);

            //flash message
            session()->setFlashdata('message', 'Buku Berhasil Dihapus');

            return redirect()->to(base_url('buku'));
        }
    }
}