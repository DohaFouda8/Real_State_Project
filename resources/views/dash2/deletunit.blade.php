<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Product Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/DASH/deletunit.css')}}">

</head>

<body>
    <section class="products">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
        <h2>Products</h2>
        <div class="all-products">
            @foreach ($unites as $unit)

            <div class="product">
                <img src="{{ asset('storage/images/uploadedImages/'.$unit->image) }}">
                <div class="product-info">
                    <h4 class="product-title">{{ $unit->name }}
                    </h4>
                    <p class="product-price">{{ $unit->price }}</p>
                    <a class="product-btn" href="{{ route('delete_unit',$unit->id) }}">Delete</a>

                </div>
            </div>
            @endforeach

        </div>
    </section>

</body>

</html>
