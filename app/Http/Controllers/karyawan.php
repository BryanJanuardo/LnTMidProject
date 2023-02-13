<?php

namespace App\Http\Controllers;

use App\Models\karyawanmodel;
use Illuminate\Http\Request;

class karyawan extends Controller
{
    function addKaryawan(Request $req){

        $req->validate([
            'name' => 'required|min:5|max:20',
            'umur' => 'required|integer|min:21',
            'alamat' => 'required|min:10|max:40',
            'nomor' => 'required|min:9|max:12|regex:(08)',
        ]);

        $data = [
            "name" => $req->name,
            "umur" => $req->umur,
            "alamat" => $req->alamat,
            "nomor" => $req->nomor,
        ];
        karyawanmodel::create($data);
        return redirect('Listworker');
    }

    function deleteKaryawan($id){

        karyawanmodel::find($id)->delete();
        return redirect('Listworker');
    }

    function getupdateKaryawan($id) {
        $data = karyawanmodel::find($id);
        return view("edit", ["idKaryawan" => $id, "data" => $data]);
    }

    function updateKaryawan(Request $req, $id){

        $data = karyawanmodel::find($id);
        $data->update([
            "name" => $req->name,
            "umur" => $req->umur,
            "alamat" => $req->alamat,
            "nomor" => $req->nomor
        ]);
        return redirect('Listworker');
    }
}
