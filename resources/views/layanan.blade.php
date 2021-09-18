@extends('admin.master')
@section('content')
<div class="main-content">
  
    <section class="section">
          <div class="section-header mr-3 ml-3">
            <h1>Layanan</h1>
            <br></br>
            
          
          <form class="d-flex mr-3 ml-3">
              <input class="form-control mr-2" type="search" placeholder="Cari Layanan" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>

            <table class="table">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Layanan</th>
                  <th scope="col">Harga Layanan</th>
                </tr>
            </thead>
              <tbody>
                @foreach($layanans as $key => $layanan)
                <tr>
                  <th>{{$key+1}}</th>
                  <td>{{$layanan -> nama_layanan}}</td>
                  <td>Rp.{{$layanan -> harga_layanan}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
  
  
    

          
  </section>
</div>
@endsection