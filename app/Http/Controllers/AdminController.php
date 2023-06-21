<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
class AdminController extends Controller
{
    //
    function show(){
        $data['admin']=admin::all(); 
        return view('admin',$data);
 }
 function add(){
     $data=[
      'action'=> url('admin/create'),
      'tombol'=> 'simpan',
      'admin'=>(object)[        
      'type_user'=> '',
      'nama'=> '',
      'email'=> '',
      'password'=>'',
      'no_telepon'=>'',
      'alamat'=> ''
      ]
      ];
      return view('form_admin',$data);
      
     }
     function create(Request $request){
        $validate=$this->validate($request,[
            'type_user'=> 'required|string',
            'nama'=> 'required|string',
            'email'=> 'required|email',
            'password'=> 'required',
            'no_telepon'=> 'required|numeric',
            'alamat'=> 'required',
            'foto'=>'required|mimes:jpg,png'
        ]);
        $namafile = $request->nama.".".$request->file('foto')->getClientOriginalExtension();
        $validate['foto']=$request->file('foto')->storeAs('foto',$namafile);
         admin::create($validate);
         return redirect('admin');
    }
     function hapus($id){
        admin ::where ('id',$id)->delete();
         return redirect('admin');
     }
     function edit($id){
         $data['admin'] = admin::find($id);
         $data['action'] = url('admin/update').'/'.$data['admin']->id;
         $data['tombol'] = "Update";
         return view('form_admin',$data);
     }
     function update(Request $request){
         admin::where('id',$request->id)->update([
        'type_user'=> $request->type_user,
        'nama'=> $request->nama,
        'email'=> $request->email,
        'password'=>$request->password,
        'no_telepon'=>$request->no_telepon,
        'alamat'=> $request->alamat,
        'foto' =>$request->file('foto')->store('foto')
         ]);
         return redirect('admin');
     }
}
