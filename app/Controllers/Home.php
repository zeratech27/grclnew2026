<?php

namespace App\Controllers;

class Home extends BaseController
{
 

    public function dashboard()
    {
        $db      = \Config\Database::connect();
        $guru = $db->table('data_guru');
        $murid = $db->table('data_murid');
        $data['dt_guru']=$guru->get();
        $data['dt_murid']=$murid->get();

        // ini untuk jadwal perhari
        $hari= $db->table('jadwal');
        $data['harisenin']= $hari->where('hari',1)->get();
        $data['hariselasa']= $hari->where('hari',2)->get();
        $data['harirabu']= $hari->where('hari',3)->get();
        $data['harikamis']= $hari->where('hari',4)->get();
        $data['harijumat']= $hari->where('hari',5)->get();
        $data['harisabtu']= $hari->where('hari',6)->get();
        
        return view('dashboard', $data);
    }

    public function jadwal()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('jadwal');
        $builder->select('nama_murid, nama_guru, jadwal.jam, nama_hari, jadwal.keterangan');
        $builder->join('data_murid', 'data_murid.id= jadwal.namamurid');
        $builder->join('data_guru', 'data_guru.id= jadwal.namaguru');
        $builder->join('nama_hari', 'nama_hari.id= jadwal.hari');
        // $builder->where('nama_guru',$sessiguru);
        $data['jadwal']= $builder->get();
        // ini untuk get semua data masing2 guru /session
        return view('jadwal', $data);
    }

    public function absensi()
    {
        return view('absensi');
    }

}
