@extends('layouts.app')
@section('content')
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
            </ol>
        </div>
    </nav>
    <div class="container">
        <h3>{{ $product->name }}</h3>
        <hr>
        <div class="row">
            <div class="col-md-5">
                <img src="{{ route('products.image', ['imageName' => $product['image_url']]) }}" alt="..."
                    class="card-img-top">
            </div>
            <div class="col">
                <h4 class="font-weight-bold">Rp. {{ $product->price }}</h4>
                <p>Status : Out of stock</p>
                <hr>
                <div class="row">
                    <div class="col-md-2">
                        <p class="text-muted">Quantity</p>
                        <div class="d-flex">
                            <button class="btn btn-outine-dark">-</button>
                            <input type="text" readonly placeholder="0" style="width:30px" class="text-center">
                            <button class="btn btn-outline">+</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p></p>
                        <a href="{{ route('carts.add', ['id' => $product['id']]) }}"
                            class="btn btn-primary w-50 mt-4">Beli</a>
                        {{-- <button class="btn btn-primary w-50 mt-4">Beli</button> --}}
                    </div>
                </div>

            </div>
        </div>

        <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active font-weight-bold" id="home-tab" data-toggle="tab" href="#home" role="tab"
                    aria-controls="home" aria-selected="true">Deskripsi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">Review</a>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p class="mt-2"> {{ $product->description }}</p>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <p class="mt-2"> Content untuk review</p>
            </div>
        </div>
    </div>
@endsection
