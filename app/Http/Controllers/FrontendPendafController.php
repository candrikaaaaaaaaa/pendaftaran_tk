<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendPendafController extends Controller
{
    public function index()
    {
        $penddaftaran = Pendaftaran::all();
        return view('contact', compact('konsul'));
    }

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
        return redirect()->back();
}
}
