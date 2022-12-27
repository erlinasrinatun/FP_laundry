<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Jenis;
use App\Http\Controllers\Controller;
use App\Http\Resources\JenisResource;
use DB;
use Illuminate\Support\Facades\Validator;


class JenisController extends Controller
{
    public function index()
    {
        $jenis = Jenis::select('jenis_laundry','harga')
        ->get();

        return new JenisResource(true, 'Data Jenis',$jenis);
    }

    public function show($id)
    {
        $jenis = Jenis::select('jenis_laundry','harga')
        ->where('idjenis', '=', $id)
        ->get();
        
        return new JenisResource(true, 'Detail Data Jenis',$jenis);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'jenis_laundry' => 'required',
            'harga' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }
        //proses menyimpan data yg diinput
        $jenis=Jenis::create(
        [
            'jenis_laundry'=>$request->jenis_laundry,
            'harga'=>$request->harga,
            
        ]);
        
        return new JenisResource(true, 'Data Jenis Berhasil diinput',$jenis);
    }

    public function update(Request $request, $id)
    {
        
         $validator = Validator::make($request->all(),[
            'jenis_laundry' => 'required',
            'harga' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }

         //proses menyimpan data yg diinput
         $jenis = Jenis::where('idjenis',$id)->update([
            'jenis_laundry'=>$request->jenis_laundry,
            'harga'=>$request->harga,
        ]);

        return new JenisResource(true, 'Data Jenis Berhasil diubah',$jenis);              

    }

    public function destroy($id)
    {
        $jenis = Jenis::where('idjenis',$id)->first();
        $jenis->delete();
       
        return new JenisResource(true, 'Data Jenis Berhasil dihapus',$jenis); 
    }

}