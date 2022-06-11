<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtBerita = Berita::with('admin')->get();
        return view('News.berita', [
            "title" => "Berita"
        ], compact('dtBerita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('News.inputberita', [
            "title" => "Input Berita"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = $request->file('photoberita')->extension();
        $imagedata = file_get_contents($request->file('photoberita'));
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($imagedata);
        // dd($base64);
        Berita::create([
            'admin_id' => auth()->id(),
            'judulBerita' => $request->judul,
            'photo' => $base64,
            'isiBerita' => $request->isi,
        ]);

        return redirect('berita')->with('success', 'Berita Berhasil Dibuat!');
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
        $ber = Berita::findorfail($id);
        // dd($ber);
        return view('News.editberita', [
            "title" => "Edit Berita"
        ], compact('ber'));
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
        $ber = Berita::findorfail($id);
        // cek dulu param yg kosong dari request
        // semisal gambar kosong jangan update all
        // update sesuai param yg ada isinya aja
        // dd($request->all());
        //  if poto null 
        $ber->update($request->all());
        // dd($ber);
        return redirect('berita')->with('success', 'Berita Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ber = Berita::findorfail($id);
        $ber->delete();
        return back()->with('info', 'Berita Berhasil Dihapus!');;
    }

    public function newsApi()
    {
        $data = Berita::all();

        if ($data) {
            return ApiFormatter::createApi(200, 'Success', $data);
        } else {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }
}
