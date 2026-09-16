<?php

namespace App\Controllers;
use App\Models\Guru as M_Guru;

class Admin extends BaseController
{
 

    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('jadwal');
        $builder->select('nama_murid, nama_guru, jadwal.jam, nama_hari, jadwal.keterangan');
        $builder->join('data_murid', 'data_murid.id= jadwal.namamurid');
        $builder->join('data_guru', 'data_guru.id= jadwal.namaguru');
        $builder->join('nama_hari', 'nama_hari.id= jadwal.hari');
        $data['jadwal']= $builder->get();
        // ini untuk get semua data
        
        return view('admin/v_jadwal', $data);
    }
    
    public function murid()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('data_murid');
        $data['murid']= $builder->get();
        // ini untuk get semua data
        
        return view('admin/v_murid', $data);
    }
    public function guru()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('data_guru');
        $data['guru']= $builder->get();
        // ini untuk get semua data
        
        return view('admin/v_guru', $data);
    }

    public function input_guru()
    {
        return view('admin/form_guru');
    }

    public function storedata_guru()
    {
        //load helper form and URL
        helper(['form', 'url','session']);

        $validation = $this->validate([
            'nama' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Guru'
                ]
            ],
            'notelp'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Nomor telpon saja'
                ]
            ],
                'alamat'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan alamat jelas'
                ]
            ],
                'role'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Pilih User'
                ]
            ],
        ]);

          if(!$validation) {

            //render view with error validation message
            return view('admin/form_guru', [
                'validation' => $this->validator
            ]);

        } else {

            //model initialize
            $postModel = new M_Guru();
            
            //insert data into database
            $data= [
                'nama_guru'   => $this->request->getVar('nama'),
                'alamat' => $this->request->getVar('alamat'),
                'notelp' => $this->request->getVar('notelp'),
                'role' => $this->request->getVar('role'),
            ];
            session()->setFlashdata('message', 'Post Berhasil Disimpan');
            $postModel->insert($data);

            // var_dump($data);
            //flash message


            return redirect()->to(base_url('admin/guru'));
        }


    }

}
