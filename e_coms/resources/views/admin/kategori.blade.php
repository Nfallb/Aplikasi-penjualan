@extends('layouts.admin_ui')

@section('content')
    <h1>Kategori Item {{ config('app.name', 'Nama App') }}</h1>
    <div class="row">
        <div class="col-12 ">
                <table class="table table-striped ">
                    <tr class="table-dark ">
                        <th>DBID</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Select</th>
                        <th>Items</th>
                    </tr>
                    <form id="manipulateKategori" method="POST">
                        @csrf
                        @foreach ($kategoris as $kategori)
                            <tr>
                                <td>{{ $kategori->id }}</td>
                                <td><input name="{{ $kategori->id }}-nama" type="text" placeholder="{{ $kategori->nama }}" value="{{$kategori->nama}}"></td>
                                <td><textarea name="{{ $kategori->id }}-deskripsi" cols="40" rows="1">{{ $kategori->deskripsi }}</textarea></td>
                                <td><input type="checkbox" name="{{ $kategori->id }}-selected" value="{{ $kategori->id }}" @checked(false)></td>
                                <td><a href="{{ route('admin.index.kategori.items', $kategori->id) }}"><i class="bi bi-arrow-bar-right"></i></a></td>
                            </tr>
                        @endforeach
                    </form>
                    <form action="{{ route('kategori.store') }}" method="POST" id="createKategori">
                        @csrf
                        <tr>
                            <td></td>
                            <td><input type="text" name="nama" form="createKategori" placeholder="Nama Kategori baru"></td>
                            <td><textarea name="deskripsi" form="createKategori" cols="40" rows="1"></textarea></td>
                            <td><button class="btn btn-primary" form="createKategori" type="submit">Tambah</button></td>
                        </tr>
                    </form>
                </table>
                <div class="row">
                    <div class="col-2">
                        <button formaction="{{ route('kategori.update') }}" form="manipulateKategori" class="btn btn-success flex" type="submit">Update</button>
                    </div>
                    <div class="col-2">
                        <button formaction="{{ route('kategori.destroy') }}" form="manipulateKategori" class="btn btn-danger flex" type="submit">Delete</button>
                    </div>
                </div>
            </form>
            {{ $kategoris->links() }}
        </div>
    </div>
@endsection