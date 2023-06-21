<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
class ProdukController extends Controller
{
    //
    function show(){
        $data['produk']=produk::all(); 
        return view('produk',$data);

    }
    function add(){
        $data=[
         'action'=> url('produk/create'),
         'tombol'=> 'simpan',
         'produk'=>(object)[        
         'nama_produk'=> '',
         'foto'=> '',
         'harga'=> '',
         'deskripsi'=>''
         ]
         ];
         return view('form_produk',$data);
         
        }
        function create(Request $request){
         produk::create([
            'nama_produk'=>$request->nama_produk,
            'foto'=>$request->file('foto')->store('foto'),
            'harga'=>$request->harga,
            'deskripsi'=>$request->deskripsi
         ]);
         return redirect('produk');
        }
        function hapus($id){
            produk ::where ('id',$id)->delete();
             return redirect('produk');
         }
         function edit($id){
             $data['produk'] = produk::find($id);
             $data['action'] = url('produk/update').'/'.$data['produk']->id;
             $data['tombol'] = "Update";
             return view('form_produk',$data);
         }
         function update(Request $request){
            produk::where('id',$request->id)->update([
           'nama_produk'=> $request->nama_produk,
           'foto' =>$request->file('foto')->store('foto'),
           'harga'=>$request->harga,
           'deskripsi'=>$request->deskripsi
            ]);
            return redirect('produk');
        }
}
