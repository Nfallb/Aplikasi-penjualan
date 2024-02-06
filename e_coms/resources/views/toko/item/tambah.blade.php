@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center "><h4>Tambah Item ke {{ auth()->user()->toko->nama_item }}</h4></div>

                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4 text-md-end ">
                            Nama Toko :
                        </div>
                        <div class="col-md-6">
                            <b>{{ auth()->user()->toko->nama_toko }}</b>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('uploadDataToko') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nama_item" class="col-md-4 col-form-label text-md-end">Nama Item :</label>

                            <div class="col-md-6">
                                <input id="nama_item" type="text" class="form-control @error('nama_item') is-invalid @enderror" name="nama_item" value="{{ old('nama_item') }}" required autocomplete="nama_item" autofocus>

                                @error('nama_item')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="harga" class="col-md-4 col-form-label text-md-end">Harga :</label>
    
                            <div class="col-md-6">
                                <input id="harga" type="harga" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ auth()->user()->harga }}" required autocomplete="harga">
    
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-end">Deskripsi :</label>
                        
                            <div class="col-md-6">
                                <input id="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi') }}" required autocomplete="deskripsi">
                        
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
