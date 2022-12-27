@extends('admin.index')
@section('content')
@if(Auth::user()->role == 'admin')
<div class="container-fluid" id="container-wrapper">
          
</div>
@else
@include('admin.access_denied')
@endif
@endsection