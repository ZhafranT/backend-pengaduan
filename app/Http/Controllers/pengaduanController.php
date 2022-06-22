<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResponPengaduan;
use App\Models\Pengaduan;
use App\Exports\PengaduanExport;
use App\Exports\PengaduanDoneExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Helper\ApiFormatter;
use DB;
use PDF;

class pengaduanController extends Controller
{
    public function indexUnresolved()
    {
        $dtUnresolved = ResponPengaduan::with('pengaduan');
        $dtUnresolved = ResponPengaduan::where('statusPengaduan', '=', 'unresolved')->get();
        $dtcount_unresolve = ResponPengaduan::where('statusPengaduan','unresolved')->count();
        $dtcount_process = ResponPengaduan::where('statusPengaduan','process')->count();
        $dtcount_mediasi = ResponPengaduan::where('statusPengaduan','mediasi')->count();
        $dtcount_done = ResponPengaduan::where('statusPengaduan','done')->count();
        return view('Pengaduan.pengaduanunresolved', [
            "title" => "Pengaduan Unresolved"
        ], compact('dtUnresolved','dtcount_unresolve','dtcount_process','dtcount_mediasi','dtcount_done'));
    }

    public function indexOnprocess()
    {
        $dtProcess = ResponPengaduan::with('pengaduan');
        $dtProcess = ResponPengaduan::where('statusPengaduan', '=', 'process')->get();
        $dtcount_unresolve = ResponPengaduan::where('statusPengaduan','unresolved')->count();
        $dtcount_process = ResponPengaduan::where('statusPengaduan','process')->count();
        $dtcount_mediasi = ResponPengaduan::where('statusPengaduan','mediasi')->count();
        $dtcount_done = ResponPengaduan::where('statusPengaduan','done')->count();
        return view('Pengaduan.pengaduanprocess', [
            "title" => "Pengaduan Process"
        ], compact('dtProcess','dtcount_unresolve','dtcount_process','dtcount_mediasi','dtcount_done'));
    }

    public function indexMediasi()
    {
        $dtMediasi = ResponPengaduan::with('pengaduan');
        $dtMediasi = ResponPengaduan::where('statusPengaduan', '=', 'mediasi')->get();
        $dtcount_unresolve = ResponPengaduan::where('statusPengaduan','unresolved')->count();
        $dtcount_process = ResponPengaduan::where('statusPengaduan','process')->count();
        $dtcount_mediasi = ResponPengaduan::where('statusPengaduan','mediasi')->count();
        $dtcount_done = ResponPengaduan::where('statusPengaduan','done')->count();
        return view('Pengaduan.pengaduanmediasi', [
            "title" => "Pengaduan Mediasi"
        ], compact('dtMediasi','dtcount_unresolve','dtcount_process','dtcount_mediasi','dtcount_done'));
    }

    public function indexDone()
    {
        $dtDone = ResponPengaduan::with('pengaduan');
        $dtDone = ResponPengaduan::where('statusPengaduan', '=', 'done')->get();
        $dtcount_unresolve = ResponPengaduan::where('statusPengaduan','unresolved')->count();
        $dtcount_process = ResponPengaduan::where('statusPengaduan','process')->count();
        $dtcount_mediasi = ResponPengaduan::where('statusPengaduan','mediasi')->count();
        $dtcount_done = ResponPengaduan::where('statusPengaduan','done')->count();
        return view('Pengaduan.pengaduandone', [
            "title" => "Pengaduan Done"
        ], compact('dtDone','dtcount_unresolve','dtcount_process','dtcount_mediasi','dtcount_done'));
    }

    public function updateProcess($id)
    {
        try {

            $fuu = ResponPengaduan::findorfail($id);
            $fuu->update([
                'statusPengaduan' => 'process',
                'admin_id' => auth()->id(),
            ]);

            return back()->with('success', 'Data Berhasil Diproses!');

        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function updateMediasi(Request $request, $id)
    {
        try {

            $rules = [
                'tanggalMediasi' => 'required',
                'tempatMediasi' => 'required',
            ];

            $validatedData = $request->validate($rules);

            $validatedData['admin_id'] = auth()->user()->id;

            $id2 = (string)$id;
            DB::table('respon_pengaduans')
            ->where('pengaduan_id', $id2)
            ->update([
                'statusPengaduan' => 'mediasi',
                'tanggalMediasi'=> $validatedData['tanggalMediasi'],
                'tempatMediasi' => $validatedData['tempatMediasi'],
                'admin_id' => $validatedData['admin_id'],
            ]);

            return back()->with('success', 'Data Berhasil Diproses!');

        } catch (\Throwable $th) {
            dd($th);
            $message = $th->getMessage();
            return back(compact('message'));
        }
    }

    public function updateReport(Request $request, $id)
    {
        try {

            $rules = [
                'reportMediasi' => 'required',
            ];

            $validatedData = $request->validate($rules);

            $validatedData['admin_id'] = auth()->user()->id;

            $id3 = (string)$id;
            DB::table('respon_pengaduans')
            ->where('pengaduan_id', $id3)
            ->update([
                'statusPengaduan' => 'done',
                'reportMediasi'=>$validatedData['reportMediasi'],
                'admin_id' => $validatedData['admin_id'],
            ]);

            return back()->with('success', 'Data Berhasil Diproses!');
            
        } catch (\Throwable $th) {
            dd($th);
            $message = $th->getMessage();
            return back(compact('message'));
        }
    }

    public function unresolvedDetail($id)
    {
        $dun = ResponPengaduan::with('pengaduan');
        $dun = ResponPengaduan::findorfail($id);
        return view('Pengaduan.DetailPengaduan.detailunresolved', [
            "title" => "Detail Pengaduan"
        ], compact('dun'));
    }

    public function processDetail($id)
    {
        $dpr = ResponPengaduan::with('pengaduan');
        $dpr = ResponPengaduan::findorfail($id);
        return view('Pengaduan.DetailPengaduan.detailprocess', [
            "title" => "Detail Pengaduan"
        ], compact('dpr'));
    }

    public function mediasiDetail($id)
    {
        $dme = ResponPengaduan::with('pengaduan');
        $dme = ResponPengaduan::findorfail($id);
        return view('Pengaduan.DetailPengaduan.detailmediasi', [
            "title" => "Detail Pengaduan"
        ], compact('dme'));
    }

    public function doneDetail($id)
    {
        $ddo = ResponPengaduan::with('pengaduan');
        $ddo = ResponPengaduan::findorfail($id);
        return view('Pengaduan.DetailPengaduan.detaildone', [
            "title" => "Detail Pengaduan"
        ], compact('ddo'));
    }

    public function pengaduanexport()
    {
        $nama_file = 'pengaduan_masuk_'.date('d-m-Y_H:i:s').'.xlsx';
        return Excel::download(new PengaduanExport, $nama_file);
    }

    public function pengaduandoneexport()
    {
        $nama_file = 'pengaduan_keluar_'.date('d-m-Y_H:i:s').'.xlsx';
        return Excel::download(new PengaduanDoneExport, $nama_file);
    }

    public function unresolvedexport($id)
    {
        $dun = ResponPengaduan::with('pengaduan');
        $dun = ResponPengaduan::findorfail($id);
    	$pdf = PDF::loadview('Pengaduan.Export.detailunresolvedpdf', compact('dun'));
        $nama_file = 'detail_unresolved_'.date('d-m-Y_H:i:s').'.pdf';
    	return $pdf->download($nama_file);
    }

    public function processexport($id)
    {
        $dpr = ResponPengaduan::with('pengaduan');
        $dpr = ResponPengaduan::findorfail($id);
    	$pdf = PDF::loadview('Pengaduan.Export.detailprocesspdf', compact('dpr'));
        $nama_file = 'detail_process_'.date('d-m-Y_H:i:s').'.pdf';
    	return $pdf->download($nama_file);
    }

    public function mediasiexport($id)
    {
        $dme = ResponPengaduan::with('pengaduan');
        $dme = ResponPengaduan::findorfail($id);
    	$pdf = PDF::loadview('Pengaduan.Export.detailmediasipdf', compact('dme'));
        $nama_file = 'detail_mediasi_'.date('d-m-Y_H:i:s').'.pdf';
    	return $pdf->download($nama_file);
    }

    public function doneexport($id)
    {
        $ddo = ResponPengaduan::with('pengaduan');
        $ddo = ResponPengaduan::findorfail($id);
    	$pdf = PDF::loadview('Pengaduan.Export.detaildonepdf', compact('ddo'));
        $nama_file = 'detail_done_'.date('d-m-Y_H:i:s').'.pdf';
    	return $pdf->download($nama_file);
    }

    public function pengaduanTransaction(Request $request)
    {
        try {
            DB::beginTransaction();
            $validatedData = $request->validate([
                'nama' => 'required',
                'jenisKelamin' => 'required',
                'tanggalLahir' => 'required',
                'noIdentitas' => 'required',
                'telepon' => 'required',
                'email' => 'required',
                'alamat' => 'required',
                'provinsi' => 'required',
                'kotaKabupaten' => 'required',
                'kodePos' => 'required',
                'alamatTempatBarangJasa' => 'required',
                'teleponPelakuUsaha' => 'required',
                'provinsiPelakuUsaha' => 'required',
                'kotaKabupatenPelakuUsaha' => 'required',
                'kodePosPelakuUsaha' => 'required',
                'jenisProduk' => 'required',
                'detailProduk' => 'required',
                'merkDagang' => 'required',
                'type' => 'required',
                'jenisPengaduan' => 'required',
                'waktuKejadianDitemukan' => 'required',
                'tempatLokasiKejadian' => 'required',
                'buktiPembelian' => 'required',
                'saksi' => 'required',
                'kerugianMaterial' => 'required',
                'kerugianFisik' => 'required',
                'kerugianPsikis' => 'required',
                'jenisTuntutan' => 'required',
                'kronologisPengaduan' => 'required',
            ]);
            // $validatedData['user_id'] = auth()->user()->id;
            $transaction = Pengaduan::create(['user_id' => auth()->id(), $validatedData]);
            ResponPengaduan::create([
                'pengaduan_id' => $transaction->id,
                'statusPengaduan' => "unresolved",
            ]);
            DB::commit();
            return response([
                'message' => "User created successfully",
                'status' => "success"
            ], 200);
        } catch (\Exception $exp) {
            DB::rollBack();
            return response([
                'message' => $exp->getMessage(),
                'status' => 'failed'
            ], 400);
        }
    }

    public function pengaduanAPI(Request $request)
    {
        try {
            $data = Pengaduan::with(['responPengaduan'])
            ->where('user_id', '=', $request->user_id)
            ->get();

            // select * from pengaduans p
            // left join respon_pengaduans rp
            // on p.id = rp.pengaduan_id where p.user_id = $credentials

            return ApiFormatter::createApi(200, 'Success', $data);
        } catch (\Throwable $th) {
            return ApiFormatter::createApi(500, 'Internal Server Error',$th->getMessage());
        }
    }
}