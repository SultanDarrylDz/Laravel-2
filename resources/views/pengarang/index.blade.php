@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Data Pengarang</b>
                    <a href="{{route('pengarang.create')}}" class="btn btn-sm btn-primary float-right">Tambah</a>
                </div>

                <div class="card-body">

                   <div class="table-responsive">
                         <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Pengarang</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no = 1; @endphp
                            @foreach($pengarang as $data)
                            <tr>
                                <td>
                                    {{$no++}}
                                </td>
                                <td>
                                    {{$data->nama_pengarang}}
                                </td>
                                <td>
                                    {{$data->email}}
                                </td>
                                <td>
                                    {{$data->tlp}}
                                </td>
                                <td>
                                <a href="{{ route('pengarang.edit', $data->id)}}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('pengarang.show', $data->id)}}" class="btn btn-info">Show</a>
                                    <form action="{{ route('pengarang.destroy', $data->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    <!-- <a href="{{ route('pengarang.show', $data->id)}}" class="btn btn-danger">Delete</a> -->
                                </td>
                            </tr>
                            @endforeach
                        </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection