@extends('layouts.app')

@section('content')

<section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10">
  
          <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
            <div>
              <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                    class="fas fa-angle-down mt-1"></i></a></p>
            </div>
          </div>
          
          @foreach ($keranjang->items as $item)
          <div class="card rounded-3 mb-4">
            <div class="card-body p-4">
              <div class="row d-flex justify-content-between align-items-center">

                <div class="col-md-2 col-lg-2 col-xl-2">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                </div>
                
                <div class="col-md-3 col-lg-3 col-xl-3">
                  <p class="lead fw-normal mb-2"><a class="text-decoration-none text-dark" href="{{ route('item.show', ['item'=>$item->id]) }}">{{ $item->nama_item }}</a></p>
                  <p><span class="text-muted">Jumlah: </span>{{ $item->pivot->jumlah }}</p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                  <p><span class="text-muted" style="font-size: 13px">Rp. {{$item->harga}} x {{ $item->pivot->jumlah }}</span></p>
                  <h5 class="mb-0">Total: Rp. {{ $item->harga * $item->pivot->jumlah }}</h5>
                </div>

                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                  <form action="{{ route('keranjang.item.destroy', ['item'=>$item->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger "><i style="font-size: 20px" class="bi bi-trash"></i></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          @endforeach
  
          <div class="card mb-4">
            <div class="card-body p-4 d-flex flex-row">
              <div class="form-outline flex-fill">
                <input type="text" id="form1" class="form-control form-control-lg" />
                <label class="form-label" for="form1">Discount code</label>
              </div>
              <button type="button" class="btn btn-outline-warning btn-lg ms-3">Apply</button>
            </div>
          </div>
  
          <div class="card">
            <div class="card-body">
              <a href="{{ route('checkout.show', ['keranjang' => $keranjang->id]) }}" class="btn btn-warning btn-block btn-lg" role="button">Proceed to Pay</a>
            </div>
          </div>
  
        </div>
      </div>
    </div>
</section>

@endsection