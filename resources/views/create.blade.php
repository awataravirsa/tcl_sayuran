@extends('template')
@section('title','Jenis Sayuran')
@section('container')
<div class="card" style="margin-top: 20px;">
    <div class="card-body">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Tambah Sayuran</h2>
            </div>
        </div>
        <div class="card" style="margin-top: 20px;">

            <form action="{{ route('tambah') }}" method="POST">
                {{ csrf_field() }}


                <div class="form-group">
                    <label for="id">Id</label>
                    <input type="number" name="id" class="form-control" id="nid" aria-describedby="id"
                        placeholder="Masukan id">
                </div>
                <div class="form-group">
                    <label for="nama_pembeli">Nama Pembeli</label>
                    <input type="text" name="nama_pembeli" class="form-control" id="nama_pembeli"
                        aria-describedby="nama_pembeli" placeholder="Masukan Nama Pembeli">
                </div>
                <div class="form-group">
                    <label for="nama_sayuran">Nama Sayuran</label>
                    <input type="text" name="nama_sayuran" class="form-control" id="nama_sayuran"
                        aria-describedby="nama_sayuran" placeholder="Masukan Nama Sayuran">
                </div>
                <div class="form-group">
                    <label for="tanggal_stok">Tanggal Stok</label>
                    <input type="text" name="tanggal_stok" class="form-control" id="tanggal_stok"
                        aria-describedby="tanggal_stok" placeholder="Masukan Tanggal">
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" id="jumlah" aria-describedby="jumlah"
                        placeholder="Masukan jumlah sayuran">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection