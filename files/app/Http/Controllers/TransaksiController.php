<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Jenis;
use App\Models\User;
use DB;
use PDF;
use Alert;
use Carbon\Carbon;
use App\Exports\TransaksiExport;
use Maatwebsite\Excel\Facades\Excel;

class TransaksiController extends Controller
{
    public function __construct(){
        $this->middleware('admin',['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //tampilkan seluruh data
        $transaksi = Transaksi::orderBy('idtransaksi', 'DESC')->get();
        return view('transaksi.index',compact('transaksi'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ar_jenis = Jenis::all();
        $ar_users = User::all();
        //arahkan ke form input data
        return view('transaksi.form',compact('ar_jenis','ar_users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'nama_customer' => 'required',
            'jenis_id' => 'required|integer',
            'berat' => 'required|integer',
            'tgl_awal' => 'required',
            //'tgl_ambil' => 'required',
            //'total_bayar' => 'required|integer',
            //'status' => 'required',
            'users_id' => 'required|integer',
        ],
        [
            'nama_customer.required'=>'Customer Wajib Diisi',
            'nama_customer.integer'=>'Customer Wajib Diisi',
            'jenis_id.required'=>'Jenis Laundry Wajib Diisi',
            'jenis_id.integer'=>'Jenis Laundry Wajib Diisi',
            'berat.required'=>'Berat Wajib Diisi',
            'berat.integer'=>'Berat Wajib Diisi',
            'tgl_awal.required'=>'Tanggal Awal Wajib Diisi',
            //'tgl_ambil.required'=>'Tanggal Ambil Wajib Diisi',
            //'total_bayar.required'=>'Total Bayar Wajib Diisi',
            //'total_bayar.integer'=>'Total Bayar Wajib Diisi',
            //'status' => 'Status Wajib Diisi',
            'users_id.required'=>'Karyawan Wajib Diisi',
            'users_id.integer'=>'Karyawan Wajib Diisi',
        ]
        
        );

        
        DB::table('transaksi')->insert(
            [
                'nama_customer'=>$request->nama_customer,
                'jenis_id'=>$request->jenis_id,
                'berat'=>$request->berat,
                'tgl_awal'=>$request->tgl_awal,
                'tgl_ambil'=>$request->tgl_ambil,
                'total_bayar'=>$request->total_bayar,
                'users_id'=>$request->users_id,
                'created_at'=>now(),
            ]);
       
        return redirect()->route('transaksi.index')
                        ->with('success','Data Transaksi Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    
    public function showAjax(Transaksi $transaksi)
    {
        $transaksi->load(['jenis','users']);
        $transaksi = $transaksi->toArray();
        $transaksi['total_bayar'] = number_format($transaksi['total_bayar'], 2, ',', '.');
        $transaksi['tgl_awal'] = Carbon::parse($transaksi['tgl_awal'])->format('d/m/Y');
        $transaksi['tgl_ambil'] = Carbon::parse($transaksi['tgl_ambil'])->format('d/m/Y');
        $transaksi['created_at'] = Carbon::parse($transaksi['created_at'])->format('d/m/Y h:i');
        $transaksi['updated_at'] = Carbon::parse($transaksi['updated_at'])->format('d/m/Y h:i');
        return response()->json($transaksi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Transaksi::where('idtransaksi',$id)->first();
        return view('transaksi.form_edit',compact('row'));
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
        $request->validate([
            'nama_customer' => 'required',
            'jenis_id' => 'required|integer',
            'berat' => 'required|integer',
            'tgl_awal' => 'required',
            //'tgl_ambil' => 'required',
            //'total_bayar' => 'required|integer',
            'status' => 'required',
            'users_id' => 'required',
        ],

        [
            'nama_customer.required'=>'Customer Wajib Diisi',
            'nama_customer.integer'=>'Customer Wajib Diisi',
            'jenis_id.required'=>'Jenis Laundry Wajib Diisi',
            'jenis_id.integer'=>'Jenis Laundry Wajib Diisi',
            'berat.required'=>'Berat Wajib Diisi',
            'berat.integer'=>'Berat Wajib Diisi',
            'tgl_awal.required'=>'Tanggal Awal Wajib Diisi',
            'tgl_ambil.required'=>'Tanggal Ambil Wajib Diisi',
            'total_bayar.required'=>'Total Bayar Wajib Diisi',
            'total_bayar.integer'=>'Total Bayar Wajib Diisi',
            'status' => 'Status Wajib Diisi',
        ]
        
    );

        DB::table('transaksi')->where('idtransaksi',$id)->update(
            [
                'nama_customer'=>$request->nama_customer,
                'jenis_id'=>$request->jenis_id,
                'berat'=>$request->berat,
                'tgl_awal'=>$request->tgl_awal,
                'tgl_ambil'=>$request->tgl_ambil,
                'total_bayar'=>$request->total_bayar,
                'status'=>$request->status,
                'users_id'=>$request->users_id,
            ]); 
       
        return redirect()->route('transaksi.index')
                        ->with('success','Data Transaksi Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Transaksi::where($id);
        Transaksi::where('idtransaksi',$id)->delete();
        return redirect()->route('transaksi.index')
                        ->with('success','Data Transaksi Berhasil Dihapus');
    }

   

    public function transaksiPDF()
    {
        $transaksi = Transaksi::all();
        $pdf = PDF::loadView('transaksi.transaksiPDF', ['transaksi'=>$transaksi]);
        return $pdf->download('Data-Transaksi.pdf');
    }

    public function unduhPDF($id)
    {
        $transaksi = Transaksi::find($id); 
        $pdf = PDF::loadView('transaksi.unduhPDF', ['transaksi'=>$transaksi]);
        return $pdf->stream('transaksi.pdf');
    }

    public function transaksiExcel() 
    {
        return Excel::download(new TransaksiExport, 'transaksi.xlsx');
    }

}