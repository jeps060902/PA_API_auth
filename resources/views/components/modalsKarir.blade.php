<div class="modal fade" id="tambahKarir" tabindex="-1" aria-labelledby="tambahKarirLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/tambah_karir" method="POST">
            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahKarirLabel">Tambah Karir</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    @if (!empty($id))
                        @foreach ($karir as $k)
                            <div class="mb-2">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="inputNama" disabled
                                    value="{{ $k->alumni->Nama }}">
                            </div>
                            <input type="hidden" name="alumni_id" value="{{ $id }}" id="inputAlumniId">
                            <div class="mb-2">
                                <label>Jurusan</label>
                                <input type="text" class="form-control" id="inputJurusan" disabled
                                    value="{{ $k->alumni->jurusan }}">
                            </div>
                            <div class="mb-2">
                                <label>Angkatan</label>
                                <input type="text" class="form-control" id="inputAngkatan" disabled
                                    value="{{ $k->alumni->angkatan }}">
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
                        <label>Status Karir</label>
                        <select name="Status" class="form-select">
                            <option selected>--Pilih Status--</option>
                            <option value="1">Kuliah</option>
                            <option value="2">Kerja</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label>Tempat Bekerja/Kuliah</label>
                        <input type="text" name="nama_tempat" id="inputPosisi" class="form-control"
                            placeholder="Isi dengan tempat anda bekerja/kuliah" required>
                    </div>
                    <div class="mb-2">
                        <label>Posisi</label>
                        <input type="text" name="nama_posisi" id="inputPosisi" class="form-control"
                            placeholder="Jika kuliah isi 'mahasiswa'" required>
                    </div>
                    <label class="input-group-text" for="inputGroupSelect01">Tahun Mulai</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="inputGroupSelect01" name="tahun_mulai">
                            <option selected>--Pilih Tahun Mulai--</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </select>
                    </div>
                    <label class="input-group-text" for="inputGroupSelect01">Tahun Selesai
                    </label>
                    <p style="color:red; font-size:10px">noted : kosongkan jika masih bekerja</p>
                    <div class="input-group mb-3">
                        <select class="form-select" id="inputGroupSelect01" name="tahun_selesai">
                            <option value="" selected>--Pilih Tahun Selesai--</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Karir</button>
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
