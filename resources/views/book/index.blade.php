@extends('layouts.admin')
@section('content')
    <h3 class="ml-3">Book Page <br><br>
@foreach ($book as $data)
    Writer     : {{ $data->pengarang->nama_pengarang }} <br>
    Email      : {{ $data->pengarang->email }} <br>
    Title      : {{ $data->nama_buku }} <br>
    Page       : {{ $data->jumlah_halaman }} <br>    
    Translate  : {{ $data->translate_judul_buku }} <br>    
    <hr> 
@endforeach
<br><br>
    <b>Daftar Pengarang</b><br>
    <hr>
    @foreach ($pengarang as $data)
        ◉Penulis         : {{ $data->nama_pengarang }} <br>
        ◉Email           : {{ $data->email }} <br>
        ◉No Telepon      : {{ $data->tlp }} <br>
        <hr>
        <b>Daftar Buku</b> <br>
            @foreach ($data->book as $item)
                ◉Title      : {{ $item->nama_buku }} <br>
                ◉Page       : {{ $item->jumlah_halaman }} <br>    
                ◉Translate  : {{ $item->translate_judul_buku }} <br>
                <hr>
            @endforeach
            <br>
            <hr>
    @endforeach
    </h3>

@endsection