<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    function show(){
        $data['produk']=produk::all(); 
        return view('beranda',$data);

    }
    function detail($id){
        $data['produk']=produk::find($id);
        return view('detail',$data);
    }
}
