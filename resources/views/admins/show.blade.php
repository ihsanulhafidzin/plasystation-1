<!-- resources/views/admins/show.blade.php -->
<div class="container">
    <h1>{{ $admin->nama }}</h1>
    <p>Alamat: {{ $admin->alamat }}</p>
    <img src="{{ asset('images/' . $admin->foto_ktp) }}" alt="{{ $admin->nama }}" style="max-width: 100%;">
    <p>Playstation: {{ $admin->playstation->merk }} - {{ $admin->playstation->harga }}</p>
    <a href="{{ route('admins.index') }}" class="btn btn-primary">Back</a>
</div>
