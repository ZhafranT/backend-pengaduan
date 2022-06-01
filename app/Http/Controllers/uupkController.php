<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uupk;

class uupkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtUupk = Uupk::paginate(10);
        return view('Uupk.uupk', [
            "title" => "UU Pengaduan Konsumen"
        ], compact('dtUupk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Uupk.inputuupk', [
            "title" => " Input UUPK"
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
        Uupk::create([
            'admin_id' => auth()->id(),
            'nomorUU' => $request->nouu,
            'bab' => $request->babno,
            'judulBab' => $request->judul,
            'pasal' => $request->pasalno,
            'isi' => $request->isipasal,
        ]);

        return redirect('uupk')->with('success', 'UU Berhasil Diupload!');
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
        $uup = Uupk::findorfail($id);
        // dd($ber);
        return view('Uupk.edituupk', [
            "title" => " Edit UUPK"
        ], compact('uup'));
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
        $uup = Uupk::findorfail($id);
        $uup->update($request->all());
        // dd($ber);
        return redirect('uupk')->with('success', 'UU Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $uup = Uupk::findorfail($id);
        $uup->delete();
        return back()->with('info', 'UU Berhasil Dihapus!');;
    }
}
