<!-- resources/views/playstations/index.blade.php -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Playstations</h1>
            <a href="{{ route('playstations.create') }}" class="btn btn-primary mb-3">Add New Playstation</a>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Merk</th>
                        <th>Foto</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($playstations as $playstation)
                        <tr>
                            <td>{{ $playstation->id }}</td>
                            <td>{{ $playstation->merk }}</td>
                            <td><img src="{{ asset('images/' . $playstation->foto) }}" alt="{{ $playstation->merk }}"
                                    style="max-width: 100px;"></td>
                            <td>{{ 'Rp ' . number_format($playstation->harga, 0, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('playstations.destroy', $playstation->id) }}" method="POST">
                                    <a href="{{ route('playstations.show', $playstation->id) }}"
                                        class="btn btn-info">Show</a>
                                    <a href="{{ route('playstations.edit', $playstation->id) }}"
                                        class="btn btn-primary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
