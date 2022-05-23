<?php

namespace App\Http\Controllers;

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
        $dtBerita = Berita::with('berita')->get();
        return view('News.cobaberita',compact('dtBerita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('News.inputberita');
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

        return redirect('cobaberita')->with('success', 'Berita Berhasil Dibuat!');
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
        return view('News.editberita',compact('ber'));
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
        $ber->update($request->all());
        // dd($ber);
        return redirect('cobaberita')->with('success', 'Berita Berhasil Diubah!');
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
}
