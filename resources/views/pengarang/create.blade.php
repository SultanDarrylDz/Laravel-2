@extends('layouts.admin')
@section('content')
    <div class = "card">
        <div class = "card-header">
            <center><b>Tambah Data Pengarang</b></center>
        </div>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div class = "card-body">
            <form action="{{route('pengarang.store')}}" method="post" accept="">
                @csrf
                <div class="form-group">
                    <label for="">Nama Pengarang</label>
                    <input type="text" value="{{old('nama')}}" class="form-control" name="nama" placeholder="Masukan Nama Pengarang">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" value="{{old('email')}}" class="form-control" name="email" placeholder="Masukan Email Pengarang">
                </div>
                <div class="form-group">
                    <label for="">No Telepon</label>
                    <input type="text" value="{{old('tlp')}}" class="form-control" name="tlp" placeholder="Masukan Nomer Telepon">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        Simpan Data
                    </button>
                    <button type="reset" class="btn btn-danger">
                        Reset Data
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection