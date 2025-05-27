<div class="modal fade" id="tambahPrestasi" tabindex="-1" aria-labelledby="tambahPrestasiLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/tambah_prestasi" method="POST">
            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahPrestasiLabel">Tambah Prestasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    @if (!empty($id))
                        @foreach ($prestasi as $p)
                            <div class="mb-2">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="inputNama" disabled
                                    value="{{ $p->alumni->Nama }}">
                            </div>
                            <input type="hidden" name="alumni_id" value="{{ $id }}" id="inputAlumniId">
                            <div class="mb-2">
                                <label>Jurusan</label>
                                <input type="text" class="form-control" id="inputJurusan" disabled
                                    value="{{ $p->alumni->jurusan }}">
                            </div>
                            <div class="mb-2">
                                <label>Angkatan</label>
                                <input type="text" class="form-control" id="inputAngkatan" disabled
                                    value="{{ $p->alumni->angkatan }}">
                            </div>
                        @endforeach
                    @else
                        <div class="mb-2">
                            <label>Alumni</label>
                            <select name="alumni_id" class="form-select">
                                <option selected>--Pilih Alumni--</option>
                                @foreach ($alumni as $a)
                                    <option value="{{ $a->id }}">{{ $a->Nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                    <div class="mb-2">
                        <label>Nama Prestasi</label>
                        <input type="text" name="nama_prestasi" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label>Tingkatan</label>
                        <select name="grade" class="form-select">
                            <option selected>--Pilih Tingkatan--</option>
                            <option value="1">Desa</option>
                            <option value="2">Kecataman</option>
                            <option value="3">Kota</option>
                            <option value="4">Provinsi</option>
                            <option value="5">Nasional</option>
                            <option value="6">Internasional</option>

                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Prestasi</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="Peringatan" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Peringatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Tolong isi dulu filter jurusan dan angkatan untuk menambah data!
            </div>
            <div class="modal-footer">
                <button type="Button" class="btn btn-danger" data-bs-dismiss="modal">close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form id="formEditPrestasi" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Alumni</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="inputNama" disabled>
                    </div>
                    <input type="hidden" name="alumni_id" id="inputAlumniId">
                    <div class="mb-2">
                        <label>Jurusan</label>
                        <input type="text" class="form-control" id="inputJurusan" disabled>
                    </div>
                    <div class="mb-2">
                        <label>Angkatan</label>
                        <input type="text" class="form-control" id="inputAngkatan" disabled>
                    </div>
                    <div class="mb-2">
                        <label>Nama Prestasi</label>
                        <input type="text" name="nama_prestasi" id="inputPrestasi" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label>Tingkatan</label>
                        <select name="grade" id="inputGrade" class="form-select">
                            <option selected>--Pilih Tingkatan--</option>
                            <option value="1">Desa</option>
                            <option value="2">Kecataman</option>
                            <option value="3">Kota</option>
                            <option value="4">Provinsi</option>
                            <option value="5">Nasional</option>
                            <option value="6">Internasional</option>

                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="prestasiHapus" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form id="formHapusPrestasi" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" id="hapus-id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    Yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </form>
    </div>
</div>
