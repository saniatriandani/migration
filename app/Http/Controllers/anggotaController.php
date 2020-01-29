<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\anggota_model;
use Auth;
use Illuminate\Support\Facades\Validator;
class anggotaController extends Controller
{
    public function index()
    {
        if(Auth::user()->level=="admin"){
            $dt_anggota=anggota_model::get();
            return response()->json($dt_anggota);
        }else{
            return response()->json(['status'=>'anda bukan admin']);
        }
    }
    public function store(Request $req)
    {
        if(Auth::user()->level=="admin"){
            $validator=Validator::make($req->all(),
            [
                'nama_anggota'=>'required',
                'alamat'=>'required',
                'telp'=>'required'
            ]
            );
            if($validator->fails()){
                return Response()->json($validator->errors());
            }

            $simpan=anggota_model::create([
                'nama_anggota'=>$req->nama_anggota,
                'alamat'=>$req->alamat,
                'telp'=>$req->telp
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
                'nama_anggota'=>'required',
                'alamat'=>'required',
                'telp'=>'required'
            ]
            );
            if($validator->fails()){
                return Response()->json($validator->errors());
            }
            $ubah=anggota_model::where('id', $id)->update([
                'nama_anggota'=>$req->nama_anggota,
                'alamat'=>$req->alamat,
                'telp'=>$req->telp
            ]);
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function destroy($id)
    {
        if(Auth::user()->level=='admin'){
            $hapus=anggota_model::where('id', $id)->delete();
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function tampil(){
        if(Auth::user()->level=='admin'){
            $datas = anggota_model::get();
            $count = $datas->count();
            $anggota = array();
            $status = 1;
            foreach ($datas as $dt_gt){
                $anggota[] = array(
                    'nama_anggota' => $dt_gt->nama_anggota,
                    'alamat' => $dt_gt->alamat,
                    'telp' => $dt_gt->telp
                );
            }
            return Response()->json(compact('count','anggota'));
        }else{
            return Response()->json(['status'=> 'Tidak Bisa Anda Bukan Admin']);
        }
    }
}
