@extends('layouts.app')

@section('content')
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ $user->username }}</span><span class="text-black-50">{{ $user->email }}</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Anda</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Nama</label><input type="text" class="form-control" placeholder="Nama lengkap anda" value="{{ $user->name }}"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control" placeholder="Username anda" value="{{ $user->username }}"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Alamat</label><input type="text" class="form-control" placeholder="Alamat lengkap anda" value="{{ $user->alamat }}"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">No. Handphone</label><input type="text" class="form-control" placeholder="No. HP aktif" value="{{ $user->phone }}"></div>
                        <div class="col-md-6"><label class="labels">Email</label><input type="text" class="form-control" value="{{ $user->email }}" placeholder="Email aktif"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Simpan Profile</button></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="col-md-12"><label class="labels">Detail lain</label><input type="text" class="form-control" placeholder="Data tambahan" value=""></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection