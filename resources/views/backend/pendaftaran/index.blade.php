@extends('layouts.app')

@section('content')

    <div class = "container">
        <h4>Pendaftaran</h4>
        <a href="{{ route ('pendaftaran.create') }}" class="btn btn-outline-info">Tambah Data</a>
        <p></p>
       <table class ="table">
            <thead>
                <tr>
                                        <th scope="col">Nomor Resep</th>
                                        <th scope="col">Tanggal pendaftaran</th>
                                        <th scope="col">Kode Dokter</th>
                                        <th scope="col">Kode pasien</th>
                                        <th scope="col">Kode poliklinik</th>
                                        <th scope="col">Biaya</th>
                                        <th scope="col">Keterangan</th>

                                        <th colspan="2" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($pendaftaran as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->Nomor_rsep }}</td>
                                        <td>{{ $data->Tanggal_pndftran }}</td>
                                        <td>{{ $data->Kode_dktr }}</td>
                                        <td>{{ $data->Kode_psien }}</td>
                                        <td>{{ $data->Kode_plklinik }}</td>
                                        <td>{{ $data->Biaya }}</td>
                                        <td>{{ $data->Keterangan }}</td>
                                        <td>
                                            <a href="{{ route('tag.edit',$data->id) }}"
                                           class="btn btn-outline-info">Edit Data</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('tag.destroy',$data->id) }}" method="post">
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
    </div>
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
           var alamat = "http://praujikom.herokuapp.com/api/pendaftaran";
           $.ajax({
               url: alamat,
               method:"GET",
               dataType: "json",
               success: function(berhasil){
                   console.log(berhasil)
                   $.each(berhasil.data,function (key, val){
                       $('.data-tag').append(
                           `
                           <tr>
                                <td>${val.nama_tag}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-id="${val.id}" data-Nomor_rsep="${val-Nomor_rsep}" >Edit</button>
                                    <button type="button" class="btn btn-danger" data-id="${val.id}">Hapus</button>
                                    </td>
                            </tr>
                            `
                       )
                   })
               }
           });
           $('.simpan-rsep').on('click', function (e){
               e.preventDefault();
               var Nomor_rsep = $('.Nomor_rsep').val();
           })
        })
    </script>
    @endsection