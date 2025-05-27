<form method="GET" action="">
    <div class="row mb-3">
        <div class="col">
            <select class="form-control" name="jurusan" onchange="this.form.submit()">
                <option value="">Pilih Jurusan</option>
                @foreach ($jurusan as $j)
                    <option value="{{ $j->jurusan }}" {{ request('jurusan') == $j->jurusan ? 'selected' : '' }}>
                        {{ $j->jurusan }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <select class="form-control" name="angkatan" onchange="this.form.submit()">
                <option value="">Pilih Angkatan</option>
                @foreach ($angkatan as $a)
                    <option value="{{ $a->angkatan }}" {{ request('angkatan') == $a->angkatan ? 'selected' : '' }}>
                        {{ $a->angkatan }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</form>
