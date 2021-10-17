@extends('template')
@section('title','Jenis Sayuran')
@section('container')
<div class="card" style="margin-top: 20px;">
    <div class="card-body">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-left">Sayuran Transaksi</h2>
            </div>
            <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
                <a class="btn btn-info float-left" href="create"> Tambah Sayuran</a>
            </div>
        </div>

        @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
        @endif


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama Pembeli</th>
                    <th>Nama Sayuran</th>
                    <th>Tanggal Stok</th>
                    <th>Jumlah</th>
                    {{-- <th width="280px">More</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach($sayuran as $sayur)
                <tr>

                    <td>{{ $sayur->id }}</td>
                    <td>{{ $sayur->nama_pembeli }}</td>
                    <td>{{ $sayur->nama_sayuran }}</td>
                    <td>{{ $sayur->tanggal_stok }}</td>
                    <td>{{ $sayur->jumlah }}</td>
                </tr>
                @endforeach
            </tbody>

        </table>

        {{-- <div class="alert alert-alert">Start Adding to the Database.</div> --}}

    </div>
</div>
@endsection