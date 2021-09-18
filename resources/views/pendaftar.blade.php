@extends('admin.master')
@section('content')
<div class="main-content">
  
    <section class="section">
          <div class="section-header mr-3 ml-3">
            <h1>Data Pendaftar</h1>
            <br></br>
            
          
          <form class="d-flex mr-3 ml-3">
              
            </form>
            </div>

            <table class="table">
            <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Pasword</th>
                  <th scope="col">Tanggal Lahir</th>
                  <th scope="col">Tempat Lahir</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">No HP</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Hapus</th>
                  


                </tr>
            </thead>
              <tbody>
                @foreach($pendaftars as $key => $pendaftar)
                <tr>
                  <th>{{$pendaftar -> id_pendaftar}}</th>
                  <td>{{$pendaftar -> nama_pendaftar}}</td>
                  <td>{{$pendaftar -> jenis_kelamin}}</td>
                  <th>{{$pendaftar -> pasword}}</th>
                  <td>{{$pendaftar -> tanggal_lahir}}</td>
                  <td>{{$pendaftar -> tempat_lahir}}</td>
                  <td>{{$pendaftar -> alamat_pendaftar}}</td>
                  <td>{{$pendaftar -> hp_pendaftar}}</td>
                  <td>
                    <a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    </td>
                  <td>
                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> &nbsp
                    </td>
                
                </tr>
                @endforeach
              </tbody>
            </table>
  
          <a href="/tambah_pendaftar" class="btn btn-sm btn-primary">Tambah Pendaftar</a>
    

          
  </section>
</div>
@endsection