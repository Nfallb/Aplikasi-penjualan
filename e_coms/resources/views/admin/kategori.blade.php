@extends('layouts.admin_ui')

@section('content')
    <h1>Kategori Item Jualan di {{ config('app.name', 'Nama App') }}</h1>
    <div class="row">
        <div class="col-12 ">
            <form action="">
                <table class="table table-striped ">
                    <tr class="table-dark ">
                        <th>DBID</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Select</th>
                    </tr>
                    @foreach ($kategoris as $kategori)
                        <tr>
                            <td>{{ $kategori->id }}</td>
                            <td><input name="nama" type="text" placeholder="{{ $kategori->nama }}" value="{{$kategori->nama}}"></td>
                            <td><textarea name="deskripsi" cols="40" rows="1">{{ $kategori->deskripsi }}</textarea></td>
                            <td><input type="checkbox" name="kategoriData" value="{{ $kategori }}" @checked(false)></td>
                        </tr>
                    @endforeach
                </table>
                <div class="row">
                    <div class="col-12">
                        <input type="radio" name="action" id="update" value="update"><label for="update">Update</label>
                    <input type="radio" name="action" id="delete" value="delete"><label for="delete">Delete</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"><button class="btn btn-success flex" type="submit">Commit</button></div>
                </div>
            </form>
            {{ $kategoris->links() }}
        </div>
    </div>
@endsection