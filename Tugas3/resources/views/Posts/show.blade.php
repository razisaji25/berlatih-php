@extends('layout.master')

@section('content')
<div class="container-fluid">
<div class="card">
  <h3 class="card-header">{{$show->judul}}</h3>
  <div class="card-body">
    <p class="card-text">{{$show->isi}}</p>
    <h4>{{$show->tanggal_diperbaharui}}</h4>
    <a href="/pertanyaan" class="btn btn-primary">back</a>
  </div>
</div>
</div>
@endsection