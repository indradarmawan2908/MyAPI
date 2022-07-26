<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminsController extends Controller
{
public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email'   => 'required',
    ]);

    if ($validator->fails()) {

        return response()->json([
            'success' => false,
            'message' => 'Semua Kolom Wajib Diisi!',
            'data'   => $validator->errors()
        ],401);

    } else {

        $admin = Admin::create([
            'email'     => $request->input('email'),
        ]);

        if ($admin) {
            return response()->json([
                'success' => true,
                'message' => 'Admin Berhasil Disimpan!',
                'data' => $admin
            ], 204);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Admin Gagal Disimpan!',
            ], 400);
        }

    }
}}