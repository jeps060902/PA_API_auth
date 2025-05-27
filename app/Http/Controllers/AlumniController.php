<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use App\Http\Resources\respon;
use Illuminate\Support\Facades\Validator;

class AlumniController extends Controller
{


    public function index()
    {
        $query = Alumni::query();
        $Alumni = $query->get();
        return new respon(true, 'List Data Alumni', $Alumni);
    }
    public function Store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'jurusan' => 'required|string|max:100',
            'angkatan' => 'required|integer|min:2000|max:' . (date('Y') + 5),
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi Gagal',
                'errors' => $validator->errors()
            ], 422);
        }

        // Simpan data jika validasi lolos
        $alumni = Alumni::create([
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'angkatan' => $request->angkatan,
        ]);

        return new respon(true, 'Alumni Berhasil Ditambahkan', $alumni);
    }
    public function destroy($id)
    {
        $alumni = Alumni::findOrFail($id)->delete();
        return new respon(true, 'Alumni Berhasil terhapus', $alumni);
    }
    public function show($id)
    {
        $alumni = Alumni::findOrFail($id);
        return new respon(true, 'Alumni Berhasil kirim', $alumni);
    }
    public function update(Request $request, $id)
    {
        $alumni = Alumni::find($id);

        if (!$alumni) {
            return response()->json(['message' => 'Data alumni tidak ditemukan'], 404);
        }

        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'jurusan' => 'required|string|max:100',
            'angkatan' => 'required|integer|min:2000|max:' . (date('Y') + 5),
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi Gagal',
                'errors' => $validator->errors()
            ], 422);
        }

        $alumni->update([
            'nama' => $request->input('nama'), // bukan $request->Nama
            'jurusan' => $request->input('jurusan'),
            'angkatan' => $request->input('angkatan'),
        ]);
        return new respon(true, 'Alumni Berhasil diedit', $alumni);
    }
}
