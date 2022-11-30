<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//tambahkan
use App\Models\pengajuan;
use Iluminate\Support\Facades\Validator;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view ('pengajuan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi
        $rules = [
        'nama' => 'required',
        'email'  => 'required',
        'instansi'  => 'required',
        'jenis_kelamin'  => 'required',
        'jurusan'  => 'required',
        'semester'  => 'required',
        'alamat'  => 'required',
        'no_hp'  => 'required',
        'cv_datadiri'  => 'required',
        'surat_pengantar'  => 'required',
        ];
        
        $message = [
        'nama.required'  => 'nama masih kosong.',
        'email.required' => 'email masih kosong.',
        'instansi.required' => 'instansi masih kosong.',
        'jenis_kelamin.required'  => 'jenis kelamin masih kosong.',
        'jurusan.required' => 'jurusan masih kosong.',
        'semester.required' => 'semester masih kosong.',
        'alamat.required' => 'alamat masih kosong.',
        'no_hp.required' => 'no hp masih kosong.',
        'cv_datadiri.required' => 'cv/datadiri masih kosong.',
        'surat_pengantar.required'  => 'surat pengantar masih kosong.',
        ];
        //jalankan validasi
        $validator = Validator::make($request->all(), $rules, $message);
 
        //cek validasi
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        pengajuan::create([
            'nama' => $request->input('nama'),
            'email'  => $request->input('email'),
            'instansi'  => $request->input('instansi'),
            'jenis_kelamin'  => $request->input('jenis_kelamin'),
            'jurusan'  => $request->input('jurusan'),
            'semester'  => $request->input('semester'),
            'alamat'  => $request->input('alamat'),
            'no_hp'  => $request->input('no_hp'),
            'cv_datadiri'  => $request->input('cv_datadiri'),
            'surat_pengantar'  => $request->input('surat_pengantar'),
        ]);
        return redirect()->route('pengajuan')
        ->with('success', 'Pengajuan berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
