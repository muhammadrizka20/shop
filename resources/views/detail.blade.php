@extends('navbar')
@section('content')
    <div class="col-md-5">
        <section id="home">
            <div class="container-fluid p-4">
                <div class="p-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <img src="/storage/{{ $produk->foto }}" alt="" width="100">
                        </div>
                        <div class="col-md-5">
                            <h3>{{ $produk->nama_produk }}</h3>
                            <span>{{ $produk->harga }}</span>
                            <p class="pt-5">{{ $produk->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <a href="https://api.whatsapp.com/send?phone=+6287891113651&text=%22halloo dengan baim di sini%22" class="btn btn-outline-primary">beli sekarang</a>
@endsection