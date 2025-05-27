<x-layout>
    <h3 class="text-xl">
        <x-slot:title>{{ $title }}</x-slot:title>

    </h3>
    <x-modalsPrestasi :prestasi="$prestasi" :id="$id" :alumni="$alumni"></x-modalsPrestasi>
    <x-filter :angkatan="$angkatan" :jurusan="$jurusan" />
    @if (!empty($id))
        <button type="button" class="mb-3 btn-grad" data-bs-toggle="modal" data-bs-target="#tambahPrestasi">
            Tambahkan Data
        </button>
    @elseif (!empty($jurusan1) && !empty($angkatan1))
        <a href="/Prestasi">
            <button type="button" class="mb-3 badgeClear-grad">
                Clear
            </button>
        </a>
        <button type="button" class="mb-3 btn-grad" data-bs-toggle="modal" data-bs-target="#tambahPrestasi">
            Tambahkan Data
        </button>
    @else
        <button type="button" class="mb-3 btn-grad" data-bs-toggle="modal" data-bs-target="#Peringatan">
            Tambahkan Data
        </button>
    @endif
    <table id="example" class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Prestasi</th>
                <th scope="col">Tingkatan</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Angkatan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($prestasi as $a)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $a->alumni->Nama }}</td>
                    <td>{{ $a->prestasi }}</td>
                    <td>
                        @if ($a->grade == 1)
                            desa
                        @elseif($a->grade == 2)
                            kecamatan
                        @elseif($a->grade == 3)
                            Kota
                        @elseif($a->grade == 4)
                            Provinsi
                        @elseif($a->grade == 5)
                            Nasional
                        @elseif($a->grade == 6)
                            Internasional
                        @endif
                    </td>
                    <td>{{ $a->alumni?->jurusan ?? 'Tidak tersedia' }}</td>
                    <td>{{ $a->alumni?->angkatan ?? 'Tidak tersedia' }}</td>
                    <!-- Tombol Edit -->
                    <td>
                        <button type="button" class="badgeEdit-grad" id="button-edit" data-bs-toggle="modal"
                            data-bs-target="#exampleModalEdit" data-id="{{ $a->id }}"
                            data-prestasi="{{ $a->prestasi }}" data-grade="{{ $a->grade }}"
                            data-angkatan = "{{ $a->alumni->angkatan }}" data-jurusan ="{{ $a->alumni->jurusan }}"
                            data-nama = "{{ $a->alumni->Nama }}">
                            Edit
                        </button>
                        <!-- Tombol Hapus -->
                        <button type="button" class="badgeHapus-grad btn-hapus" data-bs-toggle="modal"
                            data-bs-target="#prestasiHapus" data-idprestasi="{{ $a->id }}">
                            Hapus
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
