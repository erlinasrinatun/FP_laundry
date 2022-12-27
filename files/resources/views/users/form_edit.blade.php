@extends('admin.index')
@section('content')
@php
$ar_isactive = [
        [
          'nama'=>'Aktif',
          'no'=> 1
            ],
        
            [
          'nama'=>'Tidak Aktif',
          'no'=> 0
            ]
    ];
@endphp
<div class="container px-5 my-2">
    <div class="card-body">
        <h3 class="m-0 font-weight-bold text-primary">Edit Data</h3><br>
            @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Terjadi Kesalahan saat input data<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
            @endif
            <form method="POST" action="{{ route('users.update',$row->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" name="name" class="form-control" value="{{ $row->name}}">
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
                <input type="text" name="email" class="form-control" value="{{ $row->email }}">
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-5">
                <select class="form-select form-control" name="role" id="role">
                    <option selected>Pilih Role</option>
                    
                    <option @if($row->role==='admin') selected @endif value="admin">admin</option>
                    <option @if($row->role==='karyawan') selected @endif value="karyawan">karyawan</option>
                </select>
            </div>
        </div>
      
        <div class="row mb-3">
           <label class="col-sm-2 col-form-label">Status</label>
            <div class="radio col-sm-10">
                @foreach($ar_isactive as $isactive)
                @php $cek = ($isactive['no'] == $row->isactive) ? 'checked' : ''; @endphp
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="isactive" value="{{ $isactive['no'] }}" {{ $cek }}>
                    <label class="form-check-label" for="gridRadios1">
                        {{ $isactive['nama'] }}
            </label>
                </div>
                @endforeach
            </div>
        </div>
        
        <div class="d-grid">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a class="btn btn-secondary" href=" {{ url('users') }}">Batal</a>
        </div>
    </form>
    </div>
</div>
@endsection