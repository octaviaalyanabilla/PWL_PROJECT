@section('title')
Tambah Barang Masuk
@endsection
@section('pegawai')
active
@endsection
@extends('app')
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Tambah Barang Masuk</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Barang Masuk</li>
          <li class="breadcrumb-item"><a href="#">Tambah Barang Masuk</a></li>
        </ul>
      </div>
      
      <div class="row">        
        <div class="col-md-12">
          <div class="tile">
            <!-- <h3 class="tile-title">Register</h3> -->            
            <div class="tile-body">
              <!-- <form class="form-horizontal" action="{{route('barang.store')}}" method="post"> -->
              <form class="form-horizontal" action="{{url('/barang')}}" method="post">
                {{ csrf_field()}} 
                <div class="form-group row">
                  <label class="control-label col-md-3">SKU</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" name="sku">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Nama</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="nama">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Nama Suplier</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" name="namasup">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Tanggal Datang</label>
                    <div class="col-md-8">
                      <input class="form-control col-md-8" type="date" name="tgl_datang" >
                    </div>
                </div>                   
                <div class="form-group row">
                  <label class="control-label col-md-3">Alamat</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" name="alamat"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Foto</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="file" name="foto">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Nomor HP</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="nohp">
                  </div>           
                </div>

            <div class="tile-footer">
              <div class="row">              
              <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
                  <a class="btn btn-secondary" href="http://127.0.0.1:8000/pegawai"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>        
              </div>
              </form>
            </div>
          </div>
        </div>               
      </div>
    </main>

@endsection