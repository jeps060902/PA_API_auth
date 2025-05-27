<?php

namespace App\Http\Controllers;


use App\Models\Prestasi;
use Illuminate\Http\Request;
use App\Http\Resources\respon;
use Illuminate\Support\Facades\Validator;

class PrestasiController extends Controller
{

    public function index()
    {
        // Ambil semua prestasi beserta data alumni yang terkait
        $prestasi = Prestasi::with('alumni')->get();

        // Kirim response menggunakan PrestasiResource (bisa kamu buat resource-nya)
        return new respon(true, 'Prestasi Berhasil Ditampilkan', $prestasi);
    }
    public function show($id)
    {
        $prestasi = Prestasi::with('alumni')->where('alumni_id', $id)->get();

        // Jika ingin cek apakah alumni ada (opsional)
        if ($prestasi->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Prestasi untuk alumni dengan id ' . $id . ' tidak ditemukan',
                'data' => []
            ], 404);
        }

        // Kirim response menggunakan respon
        return new respon(true, 'Prestasi Berhasil Ditampilkan untuk Alumni ID ' . $id, $prestasi);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_prestasi' => 'required|string|max:255',
            'grade' => 'required|integer'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi Gagal',
                'errors' => $validator->errors()
            ], 422);
        }
        $prestasi = Prestasi::create([
            'alumni_id' => $request->alumni_id,
            'prestasi' => $request->nama_prestasi,
            'grade' => $request->grade,
        ]);
        return new respon(true, 'Prestasi Berhasil Ditambahkan', $prestasi);
    }
    public function update(Request $request, $id)
    {
        $prestasi = Prestasi::find($id);
        if (!$prestasi) {
            return response()->json(['message' => 'Data alumni tidak ditemukan'], 404);
        }

        $validator = Validator::make($request->all(), [
            'nama_prestasi' => 'required|string|max:255',
            'grade' => 'required|integer'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi Gagal',
                'errors' => $validator->errors()
            ], 422);
        }
        $prestasi->update([
            'prestasi' => $request->nama_prestasi,
            'grade' => $request->grade,
        ]);
        return new respon(true, 'Alumni Berhasil diedit', $prestasi);
    }
    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id)->delete();
        return new respon(true, 'Prestasi Berhasil Dihapus', $prestasi);
    }
}
