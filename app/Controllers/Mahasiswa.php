<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelMahasiswa;


class Mahasiswa extends BaseController
{
    public function index()
    {
        helper('form');

        $mhs = new ModelMahasiswa();
        $data = [
            'tampildata' => $mhs->tampildata()->getResult()
        ];

        echo view('tampilmahasiswa', $data);
    }

    public function formtambah()
    {
        helper('form');
        echo view('formtambah');
    }

    public function simpandata()
    {
        $data =[
            'mhsnim' => $this->request->getPost('nim'),
            'mhsnama' => $this->request->getPost('nama'),
            'mhsjenkel' => $this->request->getPost('jenkel'),
            'mhsalamat' => $this->request->getPost('alamat'),
            'mhstelp' => $this->request->getPost('telp'),
            'mhstmplahir' => $this->request->getPost('tempat'),
            'mhstgllahir' => $this->request->getPost('tanggal'),
        ];

        $mhs = new ModelMahasiswa();

        $simpan = $mhs->simpan($data);

        if($simpan){
            return redirect()->to('/');
        }
    }

    public function delete($nim){
        $mhs = new ModelMahasiswa();
        $mhs ->hapusdata($nim);
        
        return redirect('/');
    }
    
    public function edit($nim){
        helper('form');

        $mhs = new ModelMahasiswa();
        $ambildata = $mhs->ambildata($nim);
        
        if(count($ambildata->getResult()) > 0){
            $row = $ambildata->getRow();
            $data = [
                'nim' => $nim,
                'nama' => $row->mhsnama,
                'jenkel' => $row->mhsjenkel,
                'tempat' => $row->mhstmplahir,
                'tanggal' => $row->mhstgllahir,
                'alamat' => $row->mhsalamat,
                'telp' => $row->mhstelp,
            ];
            echo view('edit', $data);
        }
    }

    public function updatedata(){
        $nim = $this->request->getPost('nim');
        $data =[
            'mhsnama' => $this->request->getPost('nama'),
            'mhsjenkel' => $this->request->getPost('jenkel'),
            'mhsalamat' => $this->request->getPost('alamat'),
            'mhstelp' => $this->request->getPost('telp'),
            'mhstmplahir' => $this->request->getPost('tempat'),
            'mhstgllahir' => $this->request->getPost('tanggal'),
        ];

        $mhs = new ModelMahasiswa();

        $update = $mhs->editdata($data, $nim);

        if($update){
            return redirect()->to('/');
        }
    }
}