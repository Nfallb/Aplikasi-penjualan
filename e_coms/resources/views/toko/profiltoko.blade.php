@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-3">
            <img src="/storage/{{ 'defaults/placeholder_img.png' }}" alt="pfp" class="rounded-circle">
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center">
                    <h1 class="display-5 border-2 border-bottom border-dark d-inline h-4">{{ $toko->nama_toko }}</h1> <!-- NOTE: Blade template commands are still gonna be executed even though it is behind an html comment -->
                    <a class="ps-5" href="{{ route('item.create') }}">Tambah Item Toko</a>
                </div>
            </div>

            <div class="row mt-1 border-bottom border-1 border-dark-subtle ">
                <span>ID:#0</span>
                {{-- <div class="col-2"><b>0</b> Posts</div>
                <div class="col-2"><b>0</b> Followers</div>
                <div class="col-2"><b>0</b> Following</div> --}}
            </div>
            <div class="row">Genre Toko: {{ $toko->genre }} </div>
            <div class="row">{{$toko->lokasi}}</div>
            <div class="row">{{$toko->deskripsi}}</div>
                <div class="row">{{$toko->telephone}}</div>
            <div class="row">{{$toko->sosmed}}</div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12 mb-3 border-bottom border-1 border-dark-subtle "><h1 class="text-center">Item Toko</h1></div>
        <div class="col mb-5">
            <div class="card h-100">
                <!-- Sale badge-->
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                <!-- Product image-->
                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">Special Item</h5>
                        <!-- Product reviews-->
                        <div class="d-flex justify-content-center small text-warning mb-2">
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                        </div>
                        <!-- Product price-->
                        <span class="text-muted text-decoration-line-through">$20.00</span>
                        $18.00
                    </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card h-100">
                <!-- Sale badge-->
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                <!-- Product image-->
                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">Special Item</h5>
                        <!-- Product reviews-->
                        <div class="d-flex justify-content-center small text-warning mb-2">
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                        </div>
                        <!-- Product price-->
                        <span class="text-muted text-decoration-line-through">$20.00</span>
                        $18.00
                    </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card h-100">
                <!-- Sale badge-->
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                <!-- Product image-->
                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">Special Item</h5>
                        <!-- Product reviews-->
                        <div class="d-flex justify-content-center small text-warning mb-2">
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                        </div>
                        <!-- Product price-->
                        <span class="text-muted text-decoration-line-through">$20.00</span>
                        $18.00
                    </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
