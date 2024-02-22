@extends('layouts.admin_ui')

@section('content')
    <h1>Item dari kategori Lorem</h1>
    <div class="row">
        <div class="col-12 ">
                <table class="table table-striped ">
                    <tr class="table-dark ">
                        <th>DBID</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Select</th>
                    </tr>
                    <form id="manipulateItem" method="POST">
                        @csrf
                        @if ($items->count() === 0)
                            <td></td>
                            <td></td>
                            <td>Kategori ini tidak memiliki item</td>
                            <td></td>
                            <td></td>
                            @else
                            @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td><img src="/storage/{{ $item->gambar }}" style="max-width: 50px;" alt="Img not found"></td>
                                <td><input name="{{ $item->id }}-nama" type="text" placeholder="{{ $item->nama_item }}" value="{{ $item->nama_item }}"></td>
                                <td><textarea name="{{ $item->id }}-deskripsi" cols="20" rows="1">{{ $item->deskripsi }}</textarea></td>
                                <td><input type="number" name="{{ $item->id }}-harga" placeholder="{{ $item->harga }}" value="{{ $item->harga }}"></td>
                                <td><input type="checkbox" name="{{ $item->id }}-selected" value="{{ $item->id }}" @checked(false)></td>
                            </tr>
                        @endforeach
                        @endif
                    </form>
                    <form action="{{ route('item.store') }}" enctype="multipart/form-data" method="POST" id="createItem">
                        <input type="hidden" name="kategori_id" form="createItem" value="{{ $kategori->id }}">
                        @csrf
                        <tr>
                            <td></td>
                            <td><input type="file" name="gambar"></td>
                            <td><input type="text" name="nama_item" placeholder="Nama Item baru"></td>
                            <td><textarea form="createItem" name="deskripsi" placeholder="Deskripsi" cols="20" rows="1"></textarea></td>
                            <td><input form="createItem" type="number" name="harga" placeholder="Harganya"></td>
                            <td><button class="btn btn-primary" form="createItem" type="submit">Tambah</button></td>
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
            {{ $items->links() }}
        </div>
    </div>
@endsection