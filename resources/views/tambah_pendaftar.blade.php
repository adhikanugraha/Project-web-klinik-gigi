@extends('admin.master')
@section('content')
<div class="main-content">
    <section class="section">
            <div class="section-header">
                <h1>Tambah Pendaftar </h1>
            </div>

            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/data_pendaftar" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>id pendaftar</label>
                                <input type="text" name="id_pendaftar" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nama Pendaftar</label>
                                <input type="text" name="nama_pendaftar" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Pasword</label>
                                <input type="text" name="pasword" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Tanggal lahir</label>
                                <input type="text" name="tanggal_lahir" class="form-control">
                            </div>
                         </div>

                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No HP</label>
                                <input type="text" name="hp_pendaftar" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat_pendaftar" class="form-control">
                            </div>

                            
                            <p>Jenis Kelamin</>
                            <p><input type='radio' name='jenis_kelamin' value='pria' /> &nbsp Laki-Laki  &nbsp &nbsp
                            <input type='radio' name='jenis_kelamin' value='perempuan' /> &nbsp Perempuan
                            </p>
                            
                            

                            <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                            <button type="reset" class="btn btn-danger mt-4" >Reset</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
    </section>
</div>

@endsection