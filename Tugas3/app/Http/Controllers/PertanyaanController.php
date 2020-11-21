<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PertanyaanController extends Controller
{
    public function create(){
        return view('Posts.create');
    }

    public function store(Request $request){
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'tanggal_diperbaharui' =>'required',
            'profil_id'=>'required'
        ]);
        // dd ($request -> all()); 
        
        $query = DB:: table('pertanyaan')->insert([
            'judul'=>$request['judul'],
            'isi'=>$request['isi'],
            'tanggal_diperbaharui'=>$request['tanggal_diperbaharui'],
            'profil_id'=>$request['profil_id']
            // 'jawaban_id'=>$request['jawaban_id']
        ]);
        return redirect('/pertanyaan')->with('success','Data Berhasil Di Tambahkan!');
        }
        public function index(){
            $pertanyaan=DB::table('pertanyaan')->get();
            return view('Posts.index',compact('pertanyaan'));
        }
        public function show($id){
            $show=DB::table('pertanyaan')->where('id',$id)->first();
            // dd ($show);
            return view('Posts.show',compact('show'));
        }
        public function edit($id){
            $edit=DB::table('pertanyaan')->where('id',$id)->first();
            // dd ($show);
            return view('Posts.edit',compact('edit'));
        }
        public function update($id,Request $request){
            $update=DB::table('pertanyaan')
                        ->where('id',$id)
                        ->update([
                            'judul'=>$request['judul'],
                            'isi'=>$request['isi'],
                            'tanggal_diperbaharui'=>$request['tanggal_diperbaharui'],
                            'profil_id'=>$request['profil_id'],
                        ]);
            // dd ($show);
            return redirect('/pertanyaan')->with('success','Data Berhasil Di Update!');
        }
        public function delete($id){
            $delete=DB::table('pertanyaan')
                        ->where('id',$id)
                        ->delete();
            // dd ($show);
            return redirect('/pertanyaan')->with('success','Data Berhasil Di Hapus!');
        }
    }
