<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index (){
        $data['title'] = 'Data Mahasiswa';
        
        $mahasiswa = new Mahasiswa();
        $data['mahasiswa'] = $mahasiswa->get_all_mahasiswa();
        return 
            view('templates/header',$data).
            view('dashboard',$data).
            view('templates/footer');
    }
    public function create (){
        $data['title'] = 'Tambah/Ubah Mahasiswa';
        return 
        view('templates.header', $data) .
        view('add-mahasiswa',$data).
        view('templates.footer');
    }
    public function edit($nrp){
        $mahasiswa = new Mahasiswa();
        $data['detail'] = $mahasiswa->get_detail($nrp);
        return view('edit-mahasiswa', $data);

    }
    public function store(Request $req)
    {
        $nrp = $req->input('nrp');
        $name = $req->input('nama');
        $email = $req->input('email');
        $mahasiswa = new Mahasiswa();
        if ($mahasiswa->check_nrp($nrp) != 0) {
            return redirect()->back()->with('err_msg', 'Maaf NRP Sudah Digunakan');
        }
        if ($mahasiswa->store($nrp, $name, $email)) {
            return redirect('/dashboard')->with('resp_msg', 'Berhasil menambahkan data');
        } else {
            return redirect()->back()->with('err_msg', 'Maaf ada kesalahan');
        };
    }
    public function update(Request $req, $nrp)
    {
        $nrp = $req->input('nrp');
        $name = $req->input('nama');
        $email = $req->input('email');
        $mahasiswa = new Mahasiswa();
        if ($mahasiswa->update_mahasiswa($nrp, $name, $email)) {
            return redirect('/dashboard')->with('resp_msg', 'Berhasil mengedit data');
        } else {
            return redirect()->back()->with('err_msg', 'Maaf ada kesalahan');
        };
    }
    public function delete_mahasiswa($nrp)
{
    $mahasiswa = new Mahasiswa();
    if ($mahasiswa->delete_mahasiswa($nrp)) {
        return redirect('/dashboard')->with('resp_msg', 'Berhasil menghapus data');
    } else {
        return redirect('/dashboard')->with('err_msg', 'Gagal menghapus data');
    };
}
}
