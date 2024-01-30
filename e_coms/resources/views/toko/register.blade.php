@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center "><h4>Daftar Mitra Toko Rafta</h4></div>

                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4 text-md-end ">
                            Nama pemilik :
                        </div>
                        <div class="col-md-6">
                            <b>{{ $user->name }}</b>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="namatoko" class="col-md-4 col-form-label text-md-end">Nama Toko :</label>

                            <div class="col-md-6">
                                <input id="namatoko" type="text" class="form-control @error('namatoko') is-invalid @enderror" name="namatoko" value="{{ old('namatoko') }}" required autocomplete="namatoko" autofocus>

                                @error('namatoko')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email Toko :</label>
    
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
    
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="telephone" class="col-md-4 col-form-label text-md-end">No. Telephone :</label>
                        
                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone">
                        
                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3 ">
                            <div class="col-md-1"></div>
                            <h3 class="col-md-10 border-bottom border-2 border-dark-subtle ">Alamat Toko</h3>
                            <div class="col-md-1"></div>
                        </div>

                        <!-- Disini spot alamat toko -->

                        <!-- Disini spot KTP dan logo-->

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Daftar
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
