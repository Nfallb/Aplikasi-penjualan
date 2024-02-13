@extends('layouts.admin_ui')

@section('content')
    <h1>Kategori Item {{ config('app.name', 'Nama App') }}</h1>
    <div class="row">
        <div class="col-12 ">
            <form action="{{ route('kategori.update') }}" method="POST">
                @csrf
                @method('PATCH')
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
                            <td><input name="{{ $kategori->id }}-nama" type="text" placeholder="{{ $kategori->nama }}" value="{{$kategori->nama}}"></td>
                            <td><textarea name="{{ $kategori->id }}-deskripsi" cols="40" rows="1">{{ $kategori->deskripsi }}</textarea></td>
                            <td><input type="checkbox" name="{{ $kategori->id }}-selected" value="{{ $kategori->id }}" @checked(false)></td>
                        </tr>
                    @endforeach
                </table>
                <div class="row">
                    <div class="col-12">
                        <input type="radio" name="action" id="update" value="update"><label for="update" checked>Update</label>
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