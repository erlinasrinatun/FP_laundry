<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table ='transaksi';
    protected $primaryKey = 'idtransaksi';
    //mapping ke kolom
    protected $fillable = ['nama_customer','jenis_id','berat','tgl_awal','tgl_ambil','total_bayar','status','users_id'];

    public function jenis()
    {
    	return $this->belongsTo(Jenis::class,'jenis_id','idjenis');
    }

    public function users()
    {
    	return $this->belongsTo(User::class,'users_id','id');
    }
}