@extends('app')
@section('title')
Detail Barang Masuk
@endsection
@section('pegawai')
active
@endsection
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Detail Barang Masuk</h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Barang Masuk</li>
          <li class="breadcrumb-item"><a href="/barang">Barang Masuk</a></li>
          <li class="breadcrumb-item"><a href="#">Detail Barang Masuk</a></li>
        </ul>
      </div>			
      <!-- Buttons-->
      <div class="tile">
        <div class="page-header">
          <div class="row">
            <div class="col-md-12">   
						<img src="{{asset('imgpegawai/'.$pegawai->foto)}}" width="180px" height="120px" alt="">
            <table class="table-condensed">					
            	<tr>
			    			<td>SKU</td>
			    			<td>:</td>
			    			<td>{{$pegawai->sku}}</td>
		    			</tr>
							<tr>
								<td>Nama</td>
								<td>: </td>
                <td>{{$pegawai->nama}}</td>
							</tr>
							<tr>
								<td> Nama Suplier, Tanggal Datang</td>
								<td>:</td>
								<td>{{$pegawai->namasup}}, {{$pegawai->tgl_datang}}</td>
							</tr>                                                           
							<tr>
								<td> Alamat</td>
								<td>:</td>
								<td>{{$pegawai->alamat}}</td>
							</tr>                                                  
							<tr>                               
								<td> Nomor HP</td>
								<td>:</td>
								<td>{{$pegawai->nohp}}</td>
							</tr>                               
						</table>
            </div>            
          </div>
        </div>
      </div>
        
    </main>
@endsection