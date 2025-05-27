<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>

<body class="h-full inter">

    <div class="min-h-full">
        <x-navbar></x-navbar>
        <x-header>{{ $title }}</x-header>
        <main>
            <div class="container">
                {{ $slot }}
            </div>
        </main>
    </div>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script>
        document.querySelectorAll('.badgeEdit-grad').forEach(button => {
            button.addEventListener('click', function() {
                let id = this.dataset.id;
                let nama = this.dataset.nama;
                let jurusan = this.dataset.jurusan
                let angkatan = this.dataset.angkatan
                console.log(id, nama, jurusan, angkatan)
                document.getElementById('edit-id').value = this.dataset.id;
                document.getElementById('edit-nama').value = this.dataset.nama;
                document.getElementById('edit-jurusan').value = this.dataset.jurusan;
                document.getElementById('edit-angkatan').value = this.dataset.angkatan;
                const form = document.getElementById('formEditAlumni');
                form.action = `/edit_alumni/${id}`;
            });
        });

        document.querySelectorAll('.badgeHapus-grad').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.dataset.id;
                document.getElementById('hapus-id').value = id;

                // Set form action dengan ID
                const form = document.getElementById('formHapusAlumni');
                form.action = `/hapus_alumni/${id}`;
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('modalTambahPrestasi');
            modal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;

                document.getElementById('inputAlumniId').value = button.getAttribute('data-id');
                document.getElementById('inputNama').value = button.getAttribute('data-nama');
                document.getElementById('inputJurusan').value = button.getAttribute('data-jurusan');
                document.getElementById('inputAngkatan').value = button.getAttribute('data-angkatan');
            });
        });


        document.querySelectorAll('#button-edit').forEach(button => {
            button.addEventListener('click', function() {
                let id = this.dataset.id;
                let nama = this.dataset.nama;
                let prestasi = this.dataset.prestasi;
                let grade = this.dataset.grade;
                let jurusan = this.dataset.jurusan
                let angkatan = this.dataset.angkatan
                console.log(id, nama, jurusan, angkatan)
                document.getElementById('inputAlumniId').value = id;
                document.getElementById('inputNama').value = nama;
                document.getElementById('inputJurusan').value = jurusan;
                document.getElementById('inputAngkatan').value = angkatan;
                document.getElementById('inputPrestasi').value = prestasi;
                document.getElementById('inputGrade').value = grade;
                const form = document.getElementById('formEditPrestasi');
                form.action = `/edit_prestasi/${id}`;
            });
        });
        document.querySelectorAll('.btn-hapus').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.dataset.idprestasi;
                document.getElementById('hapus-id').value = id;

                const form = document.getElementById('formHapusPrestasi');
                form.action = `/hapus_prestasi/${id}`; // Ini yang penting

                console.log("ID:", id);
                console.log("Form action:", form.action);
            });
        });
    </script>
    <!-- Inisialisasi DataTables -->

</body>


</html>
