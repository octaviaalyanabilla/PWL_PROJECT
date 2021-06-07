@extends('app')
@section('title')
Data Barang Masuk
@endsection
@section('pegawai')
active
@endsection
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Data Barang Masuk</h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Barang Masuk</li>
          <li class="breadcrumb-item"><a href="#">Data Barang Masuk</a></li>
        </ul>
      </div>
      <!-- Buttons-->
      <div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
              
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Foto</th>
                      <th>SKU</th>
                      <th>Nama</th>
                      <th>Nama Suplier</th>
                      <th>Tanggal Datang</th>
                      <th>No. Telp</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pegawai as $tampil)
                    <tr>                      
                      <td><img src="{{asset('imgpegawai/'.$tampil->foto)}}" alt="" width="50px" height="50px"></td>
                      <td>{{$tampil->sku}}</td>
                      <td><a href="{{route('barang.show', $tampil->id)}}">{{$tampil->nama}}</a></td>
                      <td>{{$tampil->namasup}}</td>
                      <td>{{$tampil->tgl_datang}}</td>
                      <td>{{$tampil->nohp}}</td>
                      <td>
                        <a href="{{url('/barang/'.$tampil->id.'/edit')}}"
                        class="btn btn-info"><span class="fa fa-edit (alias)"></span></a>

                      </td>
                      <td>
                        <form action="{{route('barang.destroy', $tampil->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit" ><span class="fa fa-trash"></span></button>
                        </form>
                      </td>
                      
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>           
          

            </div>            
          </div>
        </div>
        <div class="row">      
          
        </div>
      </div>
    </main>
@endsection