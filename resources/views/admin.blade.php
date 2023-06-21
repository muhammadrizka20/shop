<a href="{{url('admin/add')}}" class="btn btn-primary btn-sm">tambah data</a>
<table class="table table-hover table-bordered" border="2">
    <tr>
        <th>NO</th>
        <th>TYPE</th>
        <th>NAMA</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>NO HP</th>
        <th>ALAMAT</th>
        <th>FOTO</th>
        <th>AKSI</th>
    </tr> 
    @foreach ($admin as $key =>$item)
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $item->type_user=='admin'?'admin':'member'}}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->password }}</td>
        <td>{{ $item->no_telepon }}</td>
        <td>{{ $item->alamat }}</td>
        <td>
            <img src="/storage/{{ $item->foto }}" alt="" width="100">
        </td>

        <td>
            <a href="/admin/hapus/{{ $item->id }}>"onclick="return window.confirm('hapus data ini')" class="btn btn-danger btn-sm">Hapus</a>
            <a href="/admin/edit/{{ $item->id }}" class="btn btn-primary btn-sm">Edit</a>
        </td>
    </tr>
    @endforeach
</table>