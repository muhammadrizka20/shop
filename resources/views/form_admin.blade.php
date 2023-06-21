<a href="{{  url('admin') }}"><button>kembali</button></a>
<form action="{{ $action }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>user</td>
            <td><input type="radio" name="type_user" id="type_user" value="admin"{{ $admin->type_user=="admin"?"checked":"" }}>Admin
                <input type="radio" name="type_user" id="type_user" value="member"{{ $admin->type_user=="member"?"checked":""  }}>Member</td>
         <tr>
        <tr>
            <td>nama</td>
            <td><input type="text" name="nama" id="nama"value="{{ $admin->nama }}"></td>
        </tr>
         <tr>
             <td>email</td>
            <td><input type="email" name="email" id="email" value="{{ $admin->email }}" ></td>
         </tr>
         <tr>
            <td>password</td>
            <td><input type="text" name="password" id="password"value="{{ $admin->password }}"></td>
        </tr> 
        <tr>
            <td>no_telepon</td>
            <td><input type="text" name="no_telepon" id="no_telepon"value="{{ $admin->nama }}"></td>
        </tr>
        <tr>
            <td valign-top>alamat</td>
            <td><textarea name="alamat" id="alamat" cols="30" rows="10">{{ $admin->alamat }}</textarea></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type="file" name="foto" id="foto"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="simpan">
            </td>
        </tr>
        
    </table>
</form>