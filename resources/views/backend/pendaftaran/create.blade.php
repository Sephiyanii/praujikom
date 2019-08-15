@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah pendaftaran</div>

                <div class="card-body">
                <form action="{{ route('pendaftaran.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                    <label for="">Nomor pendaftaran</label>
                    <input class="form-control" type="text" name="Nomor_pendftrn">
                </div>
                <div class="form-group">
                    <label for="">Tanggal pendaftaran</label>
                    <input class="form-control" type="date" name="Tanggal_pendftrn">
                </div>
                <div class="form-group">
                    <label for="">Kode Dokter</label>
                    <input class="form-control" type="text" name="Kode_dktr">
                </div>
                <div class="form-group">
                    <label for="">Kode Pasien</label>
                    <input class="form-control" type="text" name="Kode_psien">
                </div>
                <div class="form-group">
                    <label for="">Kode Poliklinik</label>
                    <input class="form-control" type="text" name="Kode_plklinik">
                </div>
                <div class="input-group">
                    <textarea name="Keterangan" id="" class="form-control ckeditor" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Biaya</label>
                    <input class="form-control" type="text" name="Biaya">
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-outline-primary">Simpan Data</button>
                    <a href="{{ route('pendaftaran.index') }}" class="btn btn sm btn-danger">Back</a>
                </div>
                </form>
                        </div>


                </div>
            </div>
        </div>
    </div>
     <script>
      $(document).ready(function(){
          $('#select22').select2();
       });
    </script>
</div>
@endsection