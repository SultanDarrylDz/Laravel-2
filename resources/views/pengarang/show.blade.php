@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b><center>Data Pengarang</center></b>
                </div>

                <div class="card-body">

                   <div class="table-responsive">
                         <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Pengarang</th>
                                <th>Email</th>
                                <th>Telepon</th>
                            </tr>
                            @php $no = 1; @endphp
                            <tr>
                                <td>
                                    {{$no++}}
                                </td>
                                <td>
                                    <label for="nama_pengarang"></label>
                                    {{$pengarang->nama_pengarang}}
                                </td>
                                <td>
                                    <label for="email"></label>
                                    {{$pengarang->email}}
                                </td>
                                <td>
                                    <label for="tlp"></label>
                                    {{$pengarang->tlp}}
                                </td>
                            </tr>
                        </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection