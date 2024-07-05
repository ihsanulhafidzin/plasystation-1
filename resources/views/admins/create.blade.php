<!-- resources/views/admins/create.blade.php -->
<div class="container">
    <h1>Add New Admin</h1>
    <form action="{{ route('admins.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" required>
        </div>
        <div class="form-group">
            <label for="foto_ktp">Foto KTP</label>
            <input type="file" name="foto_ktp" class="form-control" id="foto_ktp" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" required>
        </div>
        <div class="form-group">
            <label for="playstation_id">Playstation</label>
            <select name="playstation_id" class="form-control" id="playstation_id" required>
                @foreach ($playstations as $playstation)
                    <option value="{{ $playstation->id }}">{{ $playstation->merk }} - {{ $playstation->harga }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
