@extends('dash')
@section('dash')   
<form action="{{ $action }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
        <form action="{{ $action }}">
            <div class="container p-3">
                <h2 class="text-center fw-bold">Input Produk</h2>
            </div>

            <tr>
                <td>nama_produk</td>
                <td><input type="text" name="nama_produk" id="nama_produk"value="{{ $produk->nama_produk }}"></td>
        </tr>
        <tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="foto" id="foto"></td>
            </tr>
            <tr>
                <td>harga</td>
                <td><input type="text" name="harga" id="harga"value="{{ $produk->harga }}"></td>
            </tr>
            <td>deskripsi</td>
            <td><input type="text" name="deskripsi" id="deskripsi" value="{{ $produk->deskripsi }}" ></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="simpan">
            </td>
        </tr>
        
    </form>
    </table>
</form>
@endsection
