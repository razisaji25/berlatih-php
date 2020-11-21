@extends('layout.master')

@section('content')
<!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{old('judul','')}}" placeholder="Judul">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" value="{{old('isi','')}}" placeholder="Isi">
                    @error('isi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="tanggal_diperbaharui">Tanggal_Diperbaharui</label>
                    <input type="date" class="form-control" id="tanggal_diperbaharui" name="tanggal_diperbaharui" value="{{old('tanggal_diperbaharui','')}}" placeholder="Tanggal_Dibuat">
                    @error('tanggal_diperbaharui')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="profil_id">Profil_id</label>
                    <input type="text" class="form-control" id="profil_id" name="profil_id" value="{{old('profil_id','')}}" placeholder="id">
                    @error('profil_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <!-- <div class="form-group">
                    <label for="jawaban_id">Jawaban_id</label>
                    <input type="text" class="form-control" id="jawaban_id" name="jawaban_id" placeholder="id">
                  </div>
                </div> -->
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
              </form>
            </div>
@endsection