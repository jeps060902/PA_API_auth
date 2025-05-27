<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use Illuminate\Http\Request;
use App\Http\Resources\respon;
use Illuminate\Support\Facades\Validator;

class KarirController extends Controller
{
    public function index()
    {
        $karir = Karir::with('alumni')->get();
        return new respon(true, 'Prestasi Berhasil Ditambahkan', $karir);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tempat' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'status' => 'required|string',
            'tahun_mulai' => 'required|integer|min:1900|max:' . date('Y'),
            'tahun_selesai' => 'integer|min:1900|max:' . date('Y'),
        ]);

        $validator->after(function ($validator) use ($request) {
            if ($request->tahun_mulai > $request->tahun_selesai) {
                $validator->errors()->add('tahun_mulai', 'Tahun mulai tidak boleh lebih besar dari tahun selesai.');
            }
        });

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $karir = Karir::create([
            'alumni_id' => $request->alumni_id,
            'tempat' => $request->tempat,
            'posisi' => $request->posisi,
            'status' => $request->status,
            'tahun_mulai' => $request->tahun_mulai,
            'tahun_selesai' => $request->tahun_selesai,
        ]);
        return new respon(true, 'Prestasi Berhasil Ditambahkan', $karir);
    }
}
