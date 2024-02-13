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
                    <form action="{{ route('kategori.manipulate') }}" id="manipulateKategori" method="POST">
                        @csrf
                        @method('PATCH')
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
                    <div class="col-12">
                        <input form="manipulateKategori" type="radio" name="action" id="update" value="update"><label for="update" checked>Update</label>
                        <input form="manipulateKategori" type="radio" name="action" id="delete" value="delete"><label for="delete">Delete</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"><button form="manipulateKategori" class="btn btn-success flex" type="submit">Commit</button></div>
                </div>
            </form>
            {{ $kategoris->links() }}
        </div>
    </div>
@endsection