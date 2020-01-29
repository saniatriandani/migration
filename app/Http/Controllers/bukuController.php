<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buku_model;
use Auth;
use Illuminate\Support\Facades\Validator;
class bukuController extends Controller
{
    public function index()
    {
        if(Auth::user()->level=="admin"){
            $dt_buku=buku_model::get();
            return response()->json($dt_buku);
        }else{
            return response()->json(['status'=>'anda bukan admin']);
        }
    }
    public function store(Request $req)
    {
        if(Auth::user()->level=="admin"){
            $validator=Validator::make($req->all(),
            [
                'judul'=>'required',
                'penerbit'=>'required',
                'pengarang'=>'required',
                'foto'=>'required'
            ]
            );
            if($validator->fails()){
                return Response()->json($validator->errors());
            }

            $simpan=buku_model::create([
                'judul'=>$req->judul,
                'penerbit'=>$req->penerbit,
                'pengarang'=>$req->pengarang,
                'foto'=>$req->foto
            ]);
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function update($id,Request $req)
    {
        if(Auth::user()->level=='admin'){
            $validator=Validator::make($req->all(),
            [
                'judul'=>'required',
                'penerbit'=>'required',
                'pengarang'=>'required',
                'foto'=>'required'
            ]
            );
            if($validator->fails()){
                return Response()->json($validator->errors());
            }
            $ubah=buku_model::where('id', $id)->update([
                'judul'=>$req->judul,
                'penerbit'=>$req->penerbit,
                'pengarang'=>$req->pengarang,
                'foto'=>$req->foto
            ]);
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function destroy($id)
    {
        if(Auth::user()->level=='admin'){
            $hapus=buku_model::where('id', $id)->delete();
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function tampil(){
        if(Auth::user()->level=='admin'){
            $datas = buku_model::get();
            $count = $datas->count();
            $buku = array();
            $status = 1;
            foreach ($datas as $dt_sw){
                $buku[] = array(
                    'id' => $dt_sw->id,
                    'judul' => $dt_sw->judul,
                    'penerbit' => $dt_sw->penerbit,
                    'pengarang' => $dt_sw->pengarang,
                    'foto' => $dt_sw->foto,
                );
            }
            return Response()->json(compact('count','buku'));
        }else{
            return Response()->json(['status'=> 'Tidak Bisa Anda Bukan Admin']);
        }
    }
}
