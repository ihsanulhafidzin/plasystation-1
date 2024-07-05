<!-- resources/views/admins/index.blade.php -->
<div class="container">
    <h1>Admins</h1>
    <a href="{{ route('admins.create') }}" class="btn btn-primary mb-3">Add New Admin</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Foto KTP</th>
                <th>Alamat</th>
                <th>Merk PS</th>
                <th>Harga PS</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
                <tr>
                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->nama }}</td>
                    <td><img src="{{ asset('images/' . $admin->foto_ktp) }}" alt="{{ $admin->nama }}"
                            style="max-width: 100px;"></td>
                    <td>{{ $admin->alamat }}</td>
                    <td>{{ $admin->playstation->merk }}</td>
                    <td>{{ 'Rp ' . number_format($admin->playstation->harga, 0, ',', '.') }}</td>
                    <td>
                        <form action="{{ route('admins.destroy', $admin->id) }}" method="POST">
                            <a href="{{ route('admins.show', $admin->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-primary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
