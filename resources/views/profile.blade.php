<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@php
    $data1= "Ini Data Ke 1";
    $data2= "Ini Data Ke 2";
    $status= 2;
@endphp

<h1>{{$data1}}</h1>
<h1>{{$data2}}</h1>

@if($status == 1)
    <h2>Status Kamu Lulus</h2>
@else
    <h2>Status Kamu Tidak Lulus</h2>
@endif

@for ($i = 1; $i <= 10; $i++)
    @if($i % 2 == 0)
    <h3>Data {{ $i }} Adalah Bilangan Genap</h3>
    @else
    <h3>Data {{ $i }} Adalah Bilangan Ganjil</h3>
    @endif
@endfor

@php
    $warna = '<div style="color: blue">Sultan Darryl Dzulfikar</div>'
@endphp
    {{-- tes --}}
{!!$warna!!}

</body>
</html>
