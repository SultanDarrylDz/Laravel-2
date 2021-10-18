@extends('layouts.admin')

@section('header')
Halaman Index
@endsection

@section('content')
<div class="container">
<div class="card ml-3">
    <h3 class="card-header bg-primary text-center">Daftar Buku</h3>
    <div class="card-body">
    @foreach ($buku as $data)
    Pengarang Buku : {{ $data->pengarang->nama_pengarang }}<br>
    Email Pengarang : {{ $data->pengarang->email }}<br>
    Nama Buku : {{ $data->nama_buku }} <br>
    Jumlah Halman : {{ $data->jumlah_halaman }} <br>
    Translate Judul Buku : {{ $data->translate_judul_buku ?? 'Belum ada translate'}}
    <hr>
    @endforeach
</div>
    <h3 class="card-header bg-primary text-center">Daftar Pengarang Buku</h3>
    <div class="card-footer">
        @foreach ($pengarang as $data)
        Nama Pengarang : {{ $data->nama_pengarang }} <br>
        Email : {{ $data->email }} <br>
        Nomor Telepon : {{ $data->telp }}
        <hr>

        @foreach ($data->book as $items)
            Nama Buku : {{ $items->nama_buku }}<br>
            @if ($items->jumlah_halaman)
                Jumlah Halaman Buku : {{ $items->jumlah_halaman }}<br>
            @else
                Jumlah Halaman Buku : <b>Belum Mempunyai Buku</b>
            @endif
                Translate Judul Buku : {!! $items->translate_judul_buku ?? '<i>Belum Tersedia</i>' !!}
                <hr>
        @endforeach
        <hr>
        <hr>
        @endforeach
         </div>
</div>

@endsection



