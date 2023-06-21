@extends('navbar')
@section('content')
    <section id="home" class="bg-transparent" style="margin-top: 24px;">
        <div class="container pt-3 text-center">
            <img src="img/shopp.jpg" alt="1100x" height="300px">
        </div>
    </section>
    <section>
        <div class="container pt-3">
            <h3 class="fw-bold">PICTURE PRODUK</h3>
            <div class="row justify-content-center">
                @foreach ($produk as $item)
                    <div class="col col-md-3 mb-5 text-center">
                        <div class="card mt-5 ms-4" style="width: 15rem;">
                            <img src="/storage/{{ $item->foto }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->nama_produk }}</h5>
                                <p class="card-text">Rp.{{ number_format($item->harga) }}</p>
                                <a href="detail/{{ $item->id }}" class="btn btn-outline-primary">view option</a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
     </section>   
     <div class="container-fluid">
        <footer class="py-3 my-3"border-top>
         <p class="text-center">&copy;2023 <a href="" target="_blank" class="fw-bold text-decoration-none">M Rizka Fitriadi</a></p>
        </footer>

      </div>
</body>
@endsection