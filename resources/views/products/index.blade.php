@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </div>
    </nav>
    <div class="container">
        <p><span class="font-weight-bold">{{ count($products) }}</span> Products
            found</p>
        @foreach ($products as $idx => $product)

            @if ($idx == 0 || $idx % 4 == 0)
                <div class="row mt-4">
            @endif
            {{-- <div class="col-md-2">
                <div style="height: 200px;background: #e9ecef;border-radius:5px" class="p-2">
                    <h5>CATEGORIES</h5>
                    <ul>
                        <li>category 1</li>
                        <li>category 1</li>
                        <li>category 1</li>
                        <li>category 1</li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-md-4">

                <div class="card border-0">
                    <img src="{{ route('products.image', ['imageName' => $product['image_url']]) }}"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ route('products.show', ['id' => $product['id']]) }}">
                                {{ $product->name }}
                            </a>
                        </h5>
                        <p class="card-text">
                            Rp. {{ $product->price }}
                        </p>
                        <a href="{{ route('carts.add', ['id' => $product['id']]) }}" class="btn btn-primary">Beli</a>
                    </div>
                </div>
            </div>
            @if ($idx > 0 && $idx % 4 == 3)
    </div>
    @endif
    @endforeach
    </div>
@endsection
