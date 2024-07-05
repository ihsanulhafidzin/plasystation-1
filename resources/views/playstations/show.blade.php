<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <style>
        /* General container styling */
        .container {
            margin: 0 auto;
            padding: 20px;
            max-width: 1200px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Row styling */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        /* Column styling */
        .col-md-12 {
            flex: 100%;
            padding: 20px;
        }

        /* Heading styling */
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-size: 2.5em;
            font-weight: bold;
        }

        /* Product grid styling */
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        /* Product card styling */
        .product-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            max-width: 250px;
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        /* Product image styling */
        .product-card img {
            max-width: 100%;
            height: auto;
            display: block;
            border-bottom: 1px solid #dee2e6;
        }

        /* Product details styling */
        .product-details {
            padding: 15px;
        }

        .product-details h2 {
            font-size: 1.5em;
            color: #333;
            margin: 10px 0;
        }

        .product-details p {
            color: #555;
            font-size: 1.1em;
            margin: 5px 0;
        }

        /* Price styling */
        .product-details p:last-child {
            color: #e74c3c;
            font-weight: bold;
        }
    </style>
    <!-- resources/views/playstations/index.blade.php -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All PlayStations</h1>
                <div class="product-grid">
                    @foreach ($playstations as $playstation)
                        <div class="product-card">
                            <img src="{{ asset('images/' . $playstation->foto) }}" alt="{{ $playstation->merk }}">
                            <div class="product-details">
                                <h2>{{ $playstation->merk }}</h2>
                                <p>Price: {{ $playstation->harga }}</p>
                                <a href="{{ route('admins.create', $playstation->id) }}"
                                    class="btn btn-primary">pesan</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>

</html>
