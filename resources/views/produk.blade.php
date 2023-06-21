<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    
</body>
</html>
<a href="{{url('produk/add')}}" class="btn btn-primary btn-sm mb-2">tambah data</a>
<table class="table table-hover table-bordered" border="2">
    <tr>
        <th>NO</th>
        <th>NAMA PRODUK</th>
        <th>FOTO</th>
        <th>HARGA</th>
        <th>DESKRIPSI</th>
        <th>AKSI</th>
    </tr> 
    @foreach ($produk as $key =>$item)
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $item->nama_produk }}</td>
        <td>
            <img src="/storage/{{ $item->foto }}" alt="" width="100">
        </td>
        <td>{{ $item->harga }}</td>
        <td>{{ $item->deskripsi }}</td>
        
        <td>
            <a href="/produk/hapus/{{ $item->id }}>"onclick="return window.confirm('hapus data ini')" class="btn btn-danger btn-sm">Hapus</a>
            <a href="/produk/edit/{{ $item->id }}" class="btn btn-primary btn-sm">Edit</a>
        </td>
    </tr>
    @endforeach
</table>
