<!-- resources/views/playstations/edit.blade.php -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Playstation</h1>
            <form action="{{ route('playstations.update', $playstation->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="merk">Merk:</label>
                    <input type="text" class="form-control" id="merk" name="merk"
                        value="{{ $playstation->merk }}">
                </div>
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="text" class="form-control" id="harga" name="harga"
                        value="{{ $playstation->harga }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
