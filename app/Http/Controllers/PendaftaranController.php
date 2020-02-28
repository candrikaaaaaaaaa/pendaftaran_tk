<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;
use Session;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::all();
        return view('backend.Pendaftaran.index', compact('Pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pendaftaran = Pendaftaran::all();
        return view('Pendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendaftaran = new pendaftaran;
        $pendaftaran->no_pendaftaran = $request->get('no_pendaftaran');
        $pendaftaran->nama = $request->get('nama');
        $pendaftaran->alamat = $request->get('alamat');
        $pendaftaran->tempat_lahir = $request->get('tempat_lahir');
        $pendaftaran->tgl_lahir = $request->get('tgl_lahir');
        $pendaftaran->jns_kelamin = $request->get('jns_kelamin');
        $pendaftaran->nama_ayah = $request->get('nama_ayah');
        $pendaftaran->pekerjaan_ayah = $request->get('pekerjaan_ayah');
        $pendaftaran->nama_ibu = $request->get('nama_ibu');
        $pendaftaran->pekerjaan_ibu = $request->get('pekerjaan_ibu');
        $pendaftaran->tgl_lahir = $request->get('tgl_lahir');
        $pendaftaran->image = $request->image;
        # foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/assets/img/pendaftaran/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $pendaftaran->foto = $filename;
        }
        $pendaftaran->save();

        Session::flash("flash_notofication", [
            "level" => "success",
            "message" => "Berhasil menyimpan <b>$pendaftaran->nama</b>"
        ]);
        return redirect()->route('pendaftaran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('backend.Pendaftaran.show', compact('pendaftaran'));
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
