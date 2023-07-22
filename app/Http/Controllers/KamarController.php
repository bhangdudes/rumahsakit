<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KamarController extends Controller
{
    public function index()
{
  $kamar = DB::table('kamar')->paginate(5);

  return view('kamar/daftarkamar',['kamar' => $kamar]);

}

public function create()
{
  return view('kamar/tambahkamar');
}

public function tambahkamar(Request $request)
{
  $this->validate($request, [
    'id' => 'required',
    'nama' => 'required',
    'jenis' => 'required',

  ], [
    'id.required' => 'Id Kamar tidak boleh kosong.',
    'nama.required' => 'Nama Kamar tidak boleh kosong.',
    'jenis.required' => 'Jenis Kamar tidak boleh kosong.',

  ]); 

  DB::table('kamar')->insert([
    'id' => $request->id,
    'nama_kamar' => $request->nama,
    'id_jeniskamar' => $request->jenis
  ]);

  return redirect('/kamar');
}

public function edit($id){
  //Untuk mengambil data dari database berdasarkan id
  $kamar = DB::table('kamar')->where('id',$id)->get();
  //Akses halaman edit dan mengirim data buku sesuai id
  return view('kamar/editkamar',['kamar' => $kamar]);
}

public function update(Request $request){
  $this->validate($request,[
    'nama' => 'required|min:1|max:35',
    'jenis' => 'required|min:1',
  ]);
  $data = [

          'nama_kamar' => $request->nama,
          'jenis_kamar' => $request->jenis,
      ];

  DB::table('kamar')->where('id',$request->id)->update([
     'nama_kamar' => $request->nama,
     'id_jeniskamar' => $request->jenis,
  ]);
   
  return redirect('/kamar');
}



  public function delete(Request $request, $id){
    //Menghapus data dari database berdasarkan id yang telah dikirim
    DB::table('kamar')->where('id',$id)->delete();


    //Setelah hapus berhasil, kembali ke halaman data buku di halaman sesuai dengan terakhir dibuka
    return redirect('/kamar'.$request->page);
}

}
