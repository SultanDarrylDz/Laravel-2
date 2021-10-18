@extends('layouts.admin')
@section('content')
    <div class = "card">
        <div class = "card-header">
            <center><b>Tambah Data Pengarang</b></center>
        </div>
        <div class = "card-body">
            <form action="{{route('pengarang.store')}}" method="post" accept="">
                @csrf
                <div class="form-group">
                    <label for="">Nama Pengarang</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Pengarang" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Masukan Email Pengarang" required>
                </div>
                <div class="form-group">
                    <label for="">No Telepon</label>
                    <input type="text" class="form-control" name="telepon" placeholder="Masukan Nomer Telepon" required>
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