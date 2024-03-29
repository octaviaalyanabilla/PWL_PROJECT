@section('title')
Master Status Pernikahan
@endsection
@section('master')
active
@endsection
@extends('app')
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Master Status Pernikahan</h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tabel Master</li>
          <li class="breadcrumb-item"><a href="#">Status Pernikahan</a></li>
        </ul>
      </div>
      <!-- Buttons-->
      <div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
              <!-- <h2 class="mb-3 line-head" id="buttons">Data Pegawai</h2> -->
              <div class="form-group col-md 8">              
              <a href="{{route('keluarga.create')}}"
              class="btn btn-primary"><span class="fa fa-plus"> Tambah Status</span></a>
              </div>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Status</th>                                                          
                      <th>Operasi</th>                      
                    </tr>
                  </thead>
                  <tbody>
                  @php
                  $no_urut=1;
                  @endphp
                    @foreach($keluarga as $tampil)
                    <tr>
                      <td>{{$no_urut++}}</td>
                      <td>{{$tampil->nmstatusk}}</td>                     
                      <td>
                        <a href="{{route('keluarga.edit', $tampil->kdstatusk)}}"
                        class="btn btn-info"><span class="fa fa-edit (alias)"> Edit</span></a>

                      </td>
                      <td>
                        <form action="{{route('keluarga.destroy', $tampil->kdstatusk)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit" ><span class="fa fa-trash"> Hapus</span></button>
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