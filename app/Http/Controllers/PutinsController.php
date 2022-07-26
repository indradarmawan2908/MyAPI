<?php

namespace App\Http\Controllers;

use App\Models\Putin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PutinsController extends Controller
{
public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email'   => 'required',
        'koli'   => 'required',
        'item'   => 'required',
        'nama'   => 'required',
        'qty'   => 'required',
    ]);

    if ($validator->fails()) {

        return response()->json([
            'success' => false,
            'message' => 'Semua Data Wajib Diisi!',
            'data'   => $validator->errors()
        ],401);

    } else {

        $putin = Putin::create([
            'email'     => $request->input('email'),
            'koli'     => $request->input('koli'),
            'item'     => $request->input('item'),
            'nama'     => $request->input('nama'),
            'qty'     => $request->input('qty'),
        ]);

        if ($putin) {
            return response()->json([
                'success' => true,
                'message' => 'Putin Berhasil Disimpan!',
                'data' => $putin
            ], 204);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Putin Gagal Disimpan!',
            ], 400);
        }
    }
}
public function show($id)
{
   $putin = Putin::find($id);

   if ($putin) {
       return response()->json([
           'success'   => true,
           'message'   => 'Detail Putin!',
           'data'      => $putin
       ], 200);
   } else {
       return response()->json([
           'success' => false,
           'message' => 'Putin Tidak Ditemukan!',
       ], 404);
   }
}
public function destroy($id)
{
    $putin = Putin::whereId($id)->first();
		
$putin->delete();

    if ($putin) {
        return response()->json([
            'success' => true,
            'message' => 'Putin Berhasil menghapus koli dan item!',
        ], 204);
    }

}
}