<x-layout>
    <h3 class="text-xl">
        <x-slot:title>{{ $title }}</x-slot:title>

    </h3>
    <x-modalsKarir :id="$id" :karir="$karir" :alumni="$alumni"></x-modalsKarir>
    <x-filter :angkatan="$angkatan" :jurusan="$jurusan" />
    @if (!empty($id))
        <button type="button" class="mb-3 btn-grad" data-bs-toggle="modal" data-bs-target="#tambahKarir">
            Tambahkan Data
        </button>
    @elseif (!empty($jurusan1) && !empty($angkatan1))
        <a href="/Prestasi">
            <button type="button" class="mb-3 badgeClear-grad">
                Clear
            </button>
        </a>
        <button type="button" class="mb-3 btn-grad" data-bs-toggle="modal" data-bs-target="#tambahKarir">
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
                <th scope="col">Status</th>
                <th scope="col">Tempat</th>
                <th scope="col">Posisi</th>
                <th scope="col">Tahun</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($karir as $a)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $a->alumni->Nama }}</td>
                    <td>
                        @if ($a->status == 1)
                            Kuliah
                        @elseif($a->status == 2)
                            Kerja
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        {{ $a->tempat }}
                    </td>
                    <td>{{ $a->posisi }}</td>
                    <td>
                        @if (!empty($a->tahun_selesai))
                            {{ $a->tahun_mulai }} - {{ $a->tahun_selesai }}
                        @else
                            {{ $a->tahun_mulai }} - Sekarang
                        @endif
                    </td>
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
