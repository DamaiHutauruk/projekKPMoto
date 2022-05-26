@extends('layouts.main')

@section('container')
   <div class="container border border-dark border-2 rounded-3 bg-light bg-opacity-75 text-dark" >
   <div class="text-center">
		<h1>{{ $name }}</h1>
		<h6> CV. Tapanuli Motor adalah sebuah perusahaan milik swasta yang bergerak pada bidang palayanan perbaikan dan penyedia suku cadang untuk kendaraan roda 4 atau lebih. Perbaikan yang kami berikan menggunakan teknologi yang cukup memadai pada kami. Kami juga menyediakan suku cadang untuk kendaraan anda dengan kualitas terbaik yang kami miliki. Kami akan memberikan pelayanan dan produk terbaik dengan harga yang sempurna. Karena kepuasan anda adalah prioritas utama untuk kami. </h6>
        <h3>For more information contact:</h3>
		<h6>{{ $email }}</h6>
		<img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle border-1">
		<p class="mt-5">&copy Copyright 2021</p>
	</div>
	</div>
@endsection