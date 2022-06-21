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
        try {

            $validatedData = $request->validate([
                'judulBerita' => 'required',
                'photo' => 'required|image|file|max:1024',
                'isiBerita' => 'required'
            ]);

            $validatedData['admin_id'] = auth()->user()->id;

            $type = $request->file('photo')->extension();
            $imagedata = file_get_contents($request->file('photo'));
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($imagedata);
            
            Berita::create([
                'admin_id' => $validatedData['admin_id'],
                'judulBerita' => $validatedData['judulBerita'],
                'photo' => $base64,
                'isiBerita' => $validatedData['isiBerita'],
            ]);

            return redirect('berita')->with('success', 'Berita Berhasil Dibuat!');

        } catch (\Throwable $th) {

            // dd($th);
            $message = $th->getMessage();
            return view('News.inputberita', [
                "title" => "Input Berita"
            ], compact('message'));

        }
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
        try {

            $ber = Berita::findorfail($id);
        
            $rules = [
                'judulBerita' => 'required',
                'photo' => 'image|file|max:1024',
                'isiBerita' => 'required'
            ];

            $validatedData = $request->validate($rules);

            $validatedData['admin_id'] = auth()->user()->id;

            if ($request->file('photo') == null) {
                Berita::where('id', $ber->id)
                ->update([
                    'admin_id' => $validatedData['admin_id'],
                    'judulBerita' => $validatedData['judulBerita'],
                    'isiBerita' => $validatedData['isiBerita'],
                ]);
            } else {
                $type = $request->file('photo')->extension();
                $imagedata = file_get_contents($request->file('photo'));
                $base64 = 'data:image/' . $type . ';base64,' . base64_encode($imagedata);
                Berita::where('id', $ber->id)
                ->update([
                    'admin_id' => $validatedData['admin_id'],
                    'judulBerita' => $validatedData['judulBerita'],
                    'photo' => $base64,
                    'isiBerita' => $validatedData['isiBerita'],
                ]);
            }

            return redirect('berita')->with('success', 'Berita Berhasil Diubah!');

        } catch (\Throwable $th) {
    
            $message = $th->getMessage();
            return view('News.editberita', [
                "title" => "Edit Berita"
            ], compact('message', 'ber'));

        }
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
        try {
            $data = Berita::all();
            return ApiFormatter::createApi(200, 'Success', $data);
        } catch (\Throwable $th) {
            return ApiFormatter::createApi(500, 'Internal Server Error',$th->getMessage());
        }
    }
}
