<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerResource;
use DB;
use Illuminate\Support\Facades\Validator;


class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::select('nama_customer','no_tlp','gender','alamat')
        ->get();

        return new CustomerResource(true, 'Data Customer',$customer);
    }

    public function show($id)
    {
        $customer = Customer::select('nama_customer','no_tlp','gender','alamat')
        ->where('idcustomer', '=', $id)
        ->get();
        
        return new CustomerResource(true, 'Detail Data Customer',$customer);
    }

    public function store(Request $request)
    {
        //proses input Customer
        $validator = Validator::make($request->all(),[
            'nama_customer' => 'required',
            'no_tlp' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
        ]);

        //cek error atau tidak inputan data
        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }
        //proses menyimpan data yg diinput
        $customer=Customer::create(
        [
            'nama_customer'=>$request->nama_customer,
            'no_tlp'=>$request->no_tlp,
            'gender'=>$request->gender,
            'alamat'=>$request->alamat,
            
        ]);
        
        return new CustomerResource(true, 'Data Customer Berhasil diinput',$customer);
    }

    public function update(Request $request, $id)
    {
        
         $validator = Validator::make($request->all(),[
            'nama_customer' => 'required',
            'no_tlp' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }

         //proses menyimpan data yg diinput
         $customer = Customer::where('idcustomer',$id)->update([
            'nama_customer'=>$request->nama_customer,
            'no_tlp'=>$request->no_tlp,
            'gender'=>$request->gender,
            'alamat'=>$request->alamat,
        ]);

        return new CustomerResource(true, 'Data Customer Berhasil diubah',$customer);              

    }

    public function destroy($id)
    {
        $customer = Customer::where('idcustomer',$id)->first();
        $customer->delete();
       
        return new CustomerResource(true, 'Data Customer Berhasil dihapus',$customer); 
    }

}