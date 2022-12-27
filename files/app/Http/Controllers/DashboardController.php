<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Jenis;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $user = DB::table('users')->count();
        $jenis = DB::table('jenis')->count();
        $transaksi = DB::table('transaksi')->count();
        $ar_harga = DB::table('jenis')->select('jenis_laundry','harga')->get();
        
        $transaksi_status = [
            'proses'=> DB::table('transaksi')->where('status','Proses')->count(),
            'selesai'=> DB::table('transaksi')->where('status','Selesai')->count(),
        ];
        
        return view('dashboard.index', compact('ar_harga','user','jenis','transaksi','transaksi_status'));
    }
    
}