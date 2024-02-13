@extends('layouts.admin_ui')

@section('content')
    <h1>Item Kategori lorem </h1>
    <div class="row">
        <div class="col-12 ">
                <table class="table table-striped ">
                    <tr class="table-dark ">
                        <th>DBID</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Select</th>
                    </tr>
                    <form action="" id="manipulateItems" method="POST">
                        @csrf
                        @method('PATCH')
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td><input name="{{ $item->id }}-nama" type="text" placeholder="{{ $item->nama_item }}" value="{{ $item->nama_item }}"></td>
                                <td><input name="{{ $item->id }}-harga" type="number" placeholder="{{ $item->harga }}"></td>
                                <td><textarea name="{{ $item->id }}-deskripsi" cols="40" rows="1">{{ $item->deskripsi }}</textarea></td>
                                <td><input type="checkbox" name="{{ $item->id }}-selected" value="{{ $item->id }}" @checked(false)></td>
                            </tr>
                        @endforeach
                    </form>
                    <form action="" method="POST" id="storeItem">
                        @csrf
                        <tr>
                            <td></td>
                            <td><input type="text" name="nama_item" form="storeItem" placeholder="Nama Kategori baru"></td>
                            <td><textarea name="deskripsi" form="storeItem" cols="40" rows="1"></textarea></td>
                            <td><button class="btn btn-primary" form="storeItem" type="submit">Tambah</button></td>
                        </tr>
                    </form>
                </table>
                <div class="row">
                    <div class="col-12">
                        <input form="manipulateItems" type="radio" name="action" id="update" value="update"><label for="update" checked>Update</label>
                        <input form="manipulateItems" type="radio" name="action" id="delete" value="delete"><label for="delete">Delete</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"><button form="manipulateItems" class="btn btn-success flex" type="submit">Commit</button></div>
                </div>
            </form>
            {{ $items->links() }}
        </div>
    </div>
@endsection