<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="/tambah_alumni" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Nama
                    <input class="form-control mb-3" type="text" placeholder="Tambahkan Nama" name="nama">
                    Jurusan
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        <select class="form-select" id="inputGroupSelect01" name="jurusan" required>
                            <option value="" selected disabled>--Pilih Jurusan--</option>
                            <option value="PPLG">PPLG</option>
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="Perhotelan">Perhotelan</option>
                        </select>
                    </div>
                    Tahun Angkatan
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        <select class="form-select" id="inputGroupSelect01" name="angkatan">
                            <option selected>--Pilih Tahun--</option>
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
        </form>
    </div>
</div>
</div>

<div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form id="formEditAlumni" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" id="edit-id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Alumni</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <label>Nama</label>
                    <input type="text" name="nama" id="edit-nama" class="form-control mb-2">
                    <label>Jurusan</label>
                    <select name="jurusan" id="edit-jurusan" class="form-select mb-2">
                        <option value="" selected disabled>--Pilih Jurusan--</option>
                        <option value="PPLG">PPLG</option>
                        <option value="Akuntansi">Akuntansi</option>
                        <option value="Perhotelan">Perhotelan</option>
                    </select>
                    <label>Angkatan</label>
                    <select name="angkatan" id="edit-angkatan" class="form-select">
                        <option selected>--Pilih Tahun--</option>
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
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="exampleModalDelete" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form id="formHapusAlumni" method="POST">
            @csrf
            @method('DELETE')
            <input type="" name="id" v-model="id_edit" id="hapus-id">
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
<div class="modal fade" id="modalTambahPrestasi" tabindex="-1" aria-labelledby="modalTambahPrestasiLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <form action="/tambah_prestasi" method="POST">
            @csrf
            <input type="hidden" name="alumni_id" id="inputAlumniId">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahPrestasiLabel">Tambah Prestasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="inputNama" disabled>
                    </div>
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
