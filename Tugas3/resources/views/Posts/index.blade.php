@extends('layout.master')

@section('content')
<div class="container-fluid">
<div class="mt-3 ml-3">
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>   
        @endif
        <a class="btn btn-primary mb-2" href="/pertanyaan/create">Create New </a>
        <div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="width:10px">#</th>
                    <th>judul</th>
                    <th>Isi</th>
                    <th>Tanggal Diperbaharui</th>
                    <th>Profil ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pertanyaan as $key => $data)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$data->judul}}</td>
                    <td>{{$data->isi}}</td>
                    <td>{{$data->tanggal_diperbaharui}}</td>
                    <td>{{$data->profil_id}}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="/pertanyaan/{{$data->id}}">Show </a>
                        <a class="btn btn-success btn-sm" href="/pertanyaan/{{$data->id}}/edit">Edit </a>
                        <form action="/pertanyaan/{{$data->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger btn-sm"> 
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>    
        </table>
        </div>
    </div>        
</div>
</div>
@endsection