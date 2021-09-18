@extends('admin.master');
@section('content');
<div class="main-content">
    <section class="section">
            <div class="section-header">
                <h1>Input Pasien </h1>
            </div>

            <div class="card">
                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>id pendaftar (jika ada):</label>
                                <input type="text" name="id_pendaftar" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nama Pasien</label>
                                <input type="text" name="nama_pasien" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Tanggal lahir</label>
                                <input type="text" name="warna" class="form-control">
                            </div>
                         </div>

                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No HP</label>
                                <input type="text" name="no_hp" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="no_hp" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Jenis layanan</label>
                                <select name="kode_type" class="form-control">
                                <option value="">--Pilih Layanan--</option>
                                @foreach($layanans as $key =>$ly)
                                    <option value="{{$ly->nama_layanan}}">{{$ly->nama_layanan}}</option>
                                @endforeach
                                </select>
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
@endsection;