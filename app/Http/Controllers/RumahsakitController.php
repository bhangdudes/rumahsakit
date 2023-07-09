<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RumahsakitController extends Controller
{
    public function index()
  {
    $pasien = DB::table('pasien')->paginate(5);
        $kamar = DB::table('kamar')->paginate(5);
        $jeniskamar = DB::table('jeniskamar')->paginate(5);

        return view('pasien/daftarpasien', ['pasien' => $pasien])
            ->with('kamar/daftarkamar', $kamar) ->with('jeniskamar',$jeniskamar);

  }

  public function create()
  {
    return view('pasien/tambahpasien');
  }

  public function tambahpasien(Request $request)
  {
    $this->validate($request, [
      'id' => 'required',
      'nama' => 'required',
      'umur' => 'required',
      'no' => 'required',

    ], [
      'id.required' => 'Id Pasien tidak boleh kosong.',
      'nama.required' => 'Nama pasien tidak boleh kosong.',
      'umur.required' => 'Umur pasien tidak boleh kosong.',
      'no.required' => 'No Kamar tidak boleh kosong.',
    ]); 

    DB::table('pasien')->insert([
      'id' => $request->id,
      'nama_pasien' => $request->nama,
      'umur_pasien' => $request->umur,
      'no_kamar' => $request->no
    ]);

    return redirect('/pasien');
  }

  public function delete(Request $request, $id)
  {

    DB::table('pasien')->where('id',$id)->delete();
    return redirect('/pasien');
  }
}
