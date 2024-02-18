@extends('layouts.app')

@section('content')
    <form action="{{ route('profile.update') }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="ps-3 pt-5">
                        <p class="m-0" style="font-size: 10px">Gambar profil</p>
                        <input type="file" name="pfp" id="pfp" class="form-control ">
                    </div>
                    <div class="d-flex flex-column align-items-center text-center p-3">
                        <img class="rounded-circle" width="150px" src="/storage/{{ $user->pfp ?? 'defaults/placeholder.jpg' }}">    
                        <span class="font-weight-bold">{{ $user->username }}</span><span class="text-black-50">{{ $user->email }}</span>
                    </div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Anda</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Nama</label><input name="name" type="text" class="form-control" placeholder="Nama lengkap anda" value="{{ $user->name }}"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Username</label><input name="username" type="text" class="form-control" placeholder="Username anda" value="{{ $user->username }}"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Alamat</label><input name="alamat" type="text" class="form-control" placeholder="Alamat lengkap anda" value="{{ $user->alamat }}"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">No. Handphone</label><input name="phone" type="text" class="form-control" placeholder="No. HP aktif" value="{{ $user->phone }}"></div>
                            <div class="col-md-6"><label class="labels">Email</label><input name="email" type="text" class="form-control" value="{{ $user->email }}" placeholder="Email aktif"></div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Simpan Profile</button></div>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="col-md-12"><label class="labels">Detail lain</label><textarea class="form-control " name="deskripsi" id="deskripsi" placeholder="Deskripsi anda" cols="30" rows="10"></textarea></div>
                    </div>
                </div> --}}
            </div>
        </div>
    </form>
@endsection