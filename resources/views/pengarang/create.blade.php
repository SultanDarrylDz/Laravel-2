@extends('layouts.admin')
@section('content')
    <div class = "card">
        <div class = "card-header">
            Tambah Data Penulis
        </div>
        <div class = "card-body">
            <form action="{{route('pengarang.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nama Penulis</label>
                    <input type="text" class="form-control" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="">No Telepon</label>
                    <input type="text" class="form-control" name="telepon" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection