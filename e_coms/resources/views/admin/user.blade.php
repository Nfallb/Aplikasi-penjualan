@extends('layouts.admin_ui')

@section('content')
    <h1>Item Kategori lorem </h1>
    <div class="row">
        <div class="col-12 ">
                <table class="table table-striped ">
                    <tr class="table-dark ">
                        <th>DBID</th>
                        <th>Nama Sah</th>
                        <th>Nama Pengguna</th>
                        <th>Email</th>
                        <th>No. Telephone</th>
                        <th>Alamat</th>
                        <th>Select</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>M. Rizki Dinar</td>
                        <td>Dinar155</td>
                        <td>dinar@gmail.com</td>
                        <td>08323345345</td>
                        <td>BJB, Kalsel</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    
                    <form action="" method="POST" id="">
                        @csrf
                        <tr>
                            <td></td>
                            <td><input type="text" name="keyword" form="" placeholder="Cari Username"></td>
                            <td></td>
                            <td><button class="btn btn-primary" form="" type="submit">Cari</button></td>
                        </tr>
                    </form>
                </table>
                <div class="row">
                    <div class="col-2"><button form="" class="btn btn-danger flex" type="submit">Ban</button></div>
                </div>
            </form>
        </div>
    </div>
@endsection