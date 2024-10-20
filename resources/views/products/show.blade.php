<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Products - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray;">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body p-0">
                        <img src="{{ asset('/storage/products/'.$product->image) }}" class="rounded" style="width: 100%; height: auto;">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3 class="mb-3">{{ $product->title }}</h3>
                        <hr>
                        <p class="text-muted mb-2">{{ "Rp " . number_format($product->price,2,',','.') }}</p>
                        <p>{!! $product->description !!}</p>
                        <hr>
                        <p><strong>Stock:</strong> {{ $product->stock }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
