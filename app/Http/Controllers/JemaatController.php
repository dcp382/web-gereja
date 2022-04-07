<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jemaat;
use App\Models\Cool;
Use Illuminate\Support\Carbon;

class JemaatController extends Controller
{
    //menampilkan data jemaat
    public function index()
    {   
        //mengambil data dari tabel
        $jemaat = Jemaat::all();
        //$tanggal = Carbon::parse($jemaat->tanggal_lahir)->format('d M Y');
        //$format = Carbon::parse($jemaat->tanggal_lahir)->translatedFormat('d M Y');
        //parsing ke html
        return view('jemaat.index',compact('jemaat'));
    }

    //masuk form tambah
    public function tambah()
    {
        $cool = Cool::orderBy('nama','asc')->get();
        return view('jemaat.form_tambah',compact('cool'));
    }

    //fun menambahkan data
    public function masuk(Request $request)
    {   
        //untuk wajib mengisi field
        $this->validate($request,[
            'nama'=> 'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'no_telepon'=>'required',
            'alamat_email'=>'required',
            'no_jemaat'=>'required',
            'nama_cool'=>'required',
            'image'=>'image|file|max:8192'
        ]);

        //untuk memasukkan data field ke tabel
        Jemaat::create([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'no_telepon'=>$request->no_telepon,
            'alamat_email'=>$request->alamat_email,
            'no_jemaat'=>$request->no_jemaat,
            'id_cool'=>$request->nama_cool
        ]);

        return redirect('/jemaat');
    }

    public function detail($id)
    {
        $jemaat = Jemaat::find($id);
        $format = Carbon::parse($jemaat->tanggal_lahir)->translatedFormat('d F Y');
        return view('jemaat.detail', compact('jemaat','format'));
    }

    public function edit($id)
    {   $jemaat = Jemaat::find($id);
        // dd($jemaat);
        return view('jemaat.form_edit',compact('jemaat'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nama'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'no_telepon'=>'required',
            'alamat_email'=>'required',
            'image'=>'required|image|mimes:jpg,jpeg,png|max:8192'
        ]);

        $jemaat = Jemaat::find($id);
        $jemaat->nama = $request->nama;
        $jemaat->alamat = $request->alamat;
        $jemaat->jenis_kelamin = $request->jenis_kelamin;
        $jemaat->tempat_lahir = $request->tempat_lahir;
        $jemaat->tanggal_lahir = $request->tanggal_lahir;
        $jemaat->no_telepon = $request->no_telepon;
        $jemaat->alamat_email = $request->alamat_email;
        $jemaat->save();
        return redirect('/jemaat');
    }

    public function hapus($id)
    {
        $jemaat = Jemaat::find($id);
        $jemaat->delete();
        return redirect('/jemaat');
    }
}
