@extends('layouts.app')

@section('content')

    <div class = "container">
        <h4>Dokter</h4>
        <a href="javascript(0)" class="btn btn-outline-info" data-toggle="modal" data-target="#tambahdata">Tambah Data</a>
        <p></p>
       <table class ="table">
            <thead>
                <tr>
                                        <th scope="col">Kode Dokter</th>
                                        <th scope="col">Nama Dokter</th>
                                        <th scope="col">Spesialis</th>
                                        <th scope="col">Alamat Dokter</th>
                                        <th scope="col">Telepon Dokter</th>
                                        <th scope="col">Kode_plklinik</th>
                                        <th scope="col">Tarif</th>

                                        <th colspan="2" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($Dokter as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->Kode_dktr }}</td>
                                        <td>{{ $data->Nama_dktr }}</td>
                                        <td>{{ $data->Spesialis }}</td>
                                        <td>{{ $data->Alamat_dktr }}</td>
                                        <td>{{ $data->Kode_plklinik }}</td>
                                        <td>{{ $data->Tarif }}</td>
                                        <td>
                                            <a href="{{ route('dokter.edit',$data->id) }}"
                                           class="btn btn-outline-info">Edit Data</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('dokter.destroy',$data->id) }}" method="post">
                                            {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-outline-info" type="submit">
                                                    Hapus Data
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

            @endforeach
        </tbody>
        </table>

<!-- Modal -->
<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route ('dokter.store') }}">
      <div class="modal-body">
      <div class="form-group">
              <label for="">Kode Dokter</label>
                <select name="Kode_dktr" class="form-control">
                  @foreach($pendaftaran as $data)
                    <option value="{{ $data->id }}">{{ $data->Kode_dktr }}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                    <label for="">Nama Dokter</label>
                    <input class="form-control" type="text" name="Nama_dktr">
                </div>
                <div class="form-group">
                    <label for="">Spesialis</label>
                    <input class="form-control" type="text" name="Spesialis">
                </div>
                <div class="form-group">
                    <label for="">Alamat Dokter</label>
                    <input class="form-control" type="text" name="Alamat_dktr">
                </div>
                <div class="form-group">
              <label for="">Kode Poliklinik</label>
                <select name="Kode_plklinik" class="form-control">
                  @foreach($pendaftaran as $data)
                    <option value="{{ $data->id }}">{{ $data->Kode_plklinik }}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                    <label for="">Tarif</label>
                    <input class="form-control" type="text" name="Tarif">
                </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan data</button>
        </form>
      </div>
    </div>
  </div>
</div>
    </div>
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
           var alamat = "http://praujikom.herokuapp.com/api/dokter";
           $.ajax({
               url: alamat,
               method:"GET",
               dataType: "json",
               success: function(berhasil){
                   console.log(berhasil)
                   $.each(berhasil.data,function (key, val){
                       $('.data-dokter').append(
                           `
                           <tr>
                                <td>${val.nama_tag}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-id="${val.id}" data-Nomor_pendftrn="${val-Nomor_rsep}" >Edit</button>
                                    <button type="button" class="btn btn-danger" data-id="${val.id}">Hapus</button>
                                    </td>
                            </tr>
                            `
                       )
                   })
               }
           });
           $('.simpan-dokter').on('click', function (e){
               e.preventDefault();
               var Nomor_pendftrn = $('.Nomor_pendftrn').val();
           })
        })
    </script>
    @endsection

    