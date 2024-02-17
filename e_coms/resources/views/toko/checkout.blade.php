@extends('layouts.app')

@section('content')
<div class="py-5 text-center">
    <h2>Checkout form</h2>
</div>
<div class="ms-3 me-3 row g-5">

    <div class="col-7">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="firstName" class="form-label">Nama depan</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Nama belakang</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>


                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email anda">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="col-12">
                    <label for="address" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="address" placeholder="Alamat anda" required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <div class="col-12">
                    <label for="address2" class="form-label">No. HP</label>
                    <input type="text" class="form-control" id="address2" placeholder="Nomor Handphone Aktif">
                </div>

                <div class="col-md-5">
                    <label for="country" class="form-label"></label>
                    <select class="form-select" id="country" required>
                        <option value="">Indonesia</option>
                        <option>Bangladesh</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="state" class="form-label">Provinsi</label>
                    <select class="form-select" id="state" required>
                        <option value="">Kalimantan Selatan</option>
                        <option>Timor Leste</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="zip" class="form-label">Kode pos</label>
                    <input type="text" class="form-control" id="zip" placeholder="" required>
                    <div class="invalid-feedback">
                        Zip code required.
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <h4 class="mb-3">Payment</h4>

            <div class="my-3">
                <div class="form-check">
                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                    <label class="form-check-label" for="credit">GoPay</label>
                </div>
                <div class="form-check">
                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="debit">Paypal</label>
                </div>
                <div class="form-check">
                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="paypal">Mandiri</label>
                </div>
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-danger btn-lg" type="submit">Bayar</button>
        </form>
    </div>

    <div class="col-5">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Your cart</span>
            <span class="badge bg-primary rounded-pill">{{ $keranjang->items->count() }}</span>
        </h4>
        <ul class="list-group mb-3">
            @foreach ($keranjang->items as $item)
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                    <h6 class="my-0">{{ $item->nama_item }}</h6>
                    <small class="text-muted">{{ $item->deskripsi }}</small>
                </div>
                <small class="text-muted">Rp. {{ $item->harga }} x {{ $item->pivot->jumlah }}</small>
                <div><b>Rp. {{ $item->harga * $item->pivot->jumlah }}</b></div>
                
            </li>
            @endforeach
            <li class="list-group-item d-flex justify-content-between">
                <span>Total</span>
                <strong>{{ $total }}</strong>
            </li>
        </ul>

        <form class="card p-2">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Promo code">
                <button type="submit" class="btn btn-danger">Redeem</button>
            </div>
        </form>
    </div>
    
</div>
@endsection