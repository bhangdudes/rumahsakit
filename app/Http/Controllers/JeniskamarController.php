<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JeniskamarController extends Controller
{
    public function index()
{
  $jeniskamar = DB::table('jeniskamar')->paginate(5);
  return view('jeniskamar/daftarjeniskamar',['jeniskamar' => $jeniskamar]);

}

public function create()
{
  return view('jeniskamar/tambahjeniskamar');
}

public function tambahjeniskamar(Request $request)
{
  $this->validate($request, [
    'id' => 'required',
    'kode_kelas' => 'required',
    'kelas' => 'required',

  ], [
    'id.required' => 'Id Jenis Kamar tidak boleh kosong.',
    'kode_kelas.required' => 'Kode Kelas tidak boleh kosong.',
    'kelas.required' => 'Kelas tidak boleh kosong.',

  ]); 

  DB::table('jeniskamar')->insert([
    'id' => $request->id,
    'kode_kelas' => $request->kode_kelas,
    'kelas' => $request->kelas
  ]);

  return redirect('/jeniskamar');
}




public function edit($id){
  //Untuk mengambil data dari database berdasarkan id
  $jeniskamar = DB::table('jeniskamar')->where('id',$id)->get();
  //Akses halaman edit dan mengirim data buku sesuai id
  return view('jeniskamar/editjeniskamar',['jeniskamar' => $jeniskamar]);
}

public function update(Request $request){
  $this->validate($request,[
    'kode_kelas' => 'required|min:1',
    'kelas' => 'required|min:1',
  ]);
  $data = [

          'kode_kelas' => $request->kode_kelas,
          'kelas' => $request->kelas,
      ];

  DB::table('jeniskamar')->where('id',$request->id)->update([
     'kode_kelas' => $request->kode_kelas,
     'kelas' => $request->kelas,
  ]);
   
  return redirect('/jeniskamar');
}



  public function delete(Request $request, $id){
    //Menghapus data dari database berdasarkan id yang telah dikirim
    DB::table('jeniskamar')->where('id',$id)->delete();


    //Setelah hapus berhasil, kembali ke halaman data buku di halaman sesuai dengan terakhir dibuka
    return redirect('/jeniskamar'.$request->page);
}

}
