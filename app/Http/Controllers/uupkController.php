<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Http\Controllers\Controller;
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
        $dtUupk = Uupk::all();

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
            "title" => "Input UUPK"
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
                'nomorUU' => 'required',
                'bab' => 'required',
                'judulBab' => 'required',
                'pasal' => 'required',
                'isi' => 'required',
            ]);
            
            $validatedData['admin_id'] = auth()->user()->id;
    
            Uupk::create($validatedData);
        } catch (\Throwable $th) {
            // dd($th);
            $message = $th->getMessage();
            return view('Uupk.inputuupk', [
                "title" => "Input UUPK"
            ], compact('message'));
        }

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
            "title" => "Edit UUPK"
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
        // $uup->update($request->all());
        // dd($ber);

        $rules = [
            'nomorUU' => 'required',
            'bab' => 'required',
            'judulBab' => 'required',
            'pasal' => 'required',
            'isi' => 'required',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['admin_id'] = auth()->user()->id;

        Uupk::where('id', $uup->id)
            ->update($validatedData);

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
        Uupk::destroy($uup->id);
        return back()->with('info', 'UU Berhasil Dihapus!');;
    }

    public function uupkApi()
    {
        try {
            $data = Uupk::all();
            return ApiFormatter::createApi(200, 'Success', $data);
        } catch (\Throwable $th) {
            return ApiFormatter::createApi(500, 'Internal Server Error',$th->getMessage());
        }
    }
}
