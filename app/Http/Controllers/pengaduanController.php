<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResponPengaduan;
use App\Models\Pengaduan;
use App\Exports\PengaduanExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use DB;
use PDF;

class pengaduanController extends Controller
{
    public function indexUnresolved()
    {
        $dtUnresolved = ResponPengaduan::with('pengaduan');
        $dtUnresolved = ResponPengaduan::where('statusPengaduan', '=', 'unresolved')->paginate(15);
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
        $dtProcess = ResponPengaduan::where('statusPengaduan', '=', 'process')->paginate(15);
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
        $dtMediasi = ResponPengaduan::where('statusPengaduan', '=', 'mediasi')->paginate(15);
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
        $dtDone = ResponPengaduan::where('statusPengaduan', '=', 'done')->paginate(15);
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
            // $fuu = ResponPengaduan::findorfail($id);
            // $fuu->update([
            //     'statusPengaduan' => 'process',
            //     'admin_id' => auth()->id(),
            // ]);

            $id1 = (string)$id;
            DB::table('respon_pengaduans')
            ->where('pengaduan_id', $id1)
            ->update([
                'statusPengaduan' => 'process',
                'admin_id' => auth()->id(),
            ]);
        } catch (\Throwable $th) {
            dd($th);
        }
        return back()->with('success', 'Data Berhasil Diproses!');
    }

    public function updateMediasi(Request $request, $id)
    {
        try {
            // $foo = ResponPengaduan::findorfail($id);
            // $foo->update([
            //     'statusPengaduan' => 'mediasi',
            //     'tanggalMediasi'=> $request->mediasitanggal,
            //     'tempatMediasi' => $request->mediasitempat,
            //     'admin_id' => auth()->id(),
            // ]);
            $id2 = (string)$id;
            DB::table('respon_pengaduans')
            ->where('pengaduan_id', $id2)
            ->update([
                'statusPengaduan' => 'mediasi',
                'tanggalMediasi'=> $request->mediasitanggal,
                'tempatMediasi' => $request->mediasitempat,
                'admin_id' => auth()->id(),
            ]);
        } catch (\Throwable $th) {
            dd($th);
        }
        return back()->with('success', 'Data Berhasil Diproses!');
    }

    public function updateReport(Request $request, $id)
    {
        try {
            // $fww = ResponPengaduan::findorfail($id);
            // $fww->update([
            //     'statusPengaduan' => 'done',
            //     'reportMediasi'=> $request->mediasireport,
            //     'admin_id' => auth()->id(),
            // ]);
            $id3 = (string)$id;
            DB::table('respon_pengaduans')
            ->where('pengaduan_id', $id3)
            ->update([
                'statusPengaduan' => 'done',
                'reportMediasi'=> $request->mediasireport,
                'admin_id' => auth()->id(),
            ]);
        } catch (\Throwable $th) {
            dd($th);
        }
        return back()->with('success', 'Data Berhasil Diproses!');
    }

    public function unresolvedDetail($id)
    {
        $dun = ResponPengaduan::with('pengaduan');
        $dun = ResponPengaduan::findorfail($id);
        return view('Pengaduan.detailunresolved', [
            "title" => "Detail Pengaduan"
        ], compact('dun'));
    }

    public function pengaduanexport()
    {
        return Excel::download(new PengaduanExport,'pengaduan.xlsx');
    }

    public function unresolvedexport($id)
    {
        $dun = ResponPengaduan::with('pengaduan');
        $dun = ResponPengaduan::findorfail($id);
    	$pdf = PDF::loadview('Pengaduan.detailunresolvedpdf', compact('dun'));
    	return $pdf->download('laporan-pengaduan-pdf');
    }

    public function pengaduanTransaction(Request $request)
    {
        try {
            DB::beginTransaction();
            $transaction = Pengaduan::create($request->all());
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
            DB::rollBack(); // Tell Laravel, "It's not you, it's me. Please don't persist to DB"
            return response([
                'message' => $exp->getMessage(),
                'status' => 'failed'
            ], 400);
        }
    }
}