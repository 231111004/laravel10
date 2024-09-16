@include('templates/header')

<body>
<div class="container p-3 my-3 ">
  <div class="d-flex justify-content-between align-items-center">
    <h2 class="w-100 text-center">Data Mahasiswa</h2>
  </div>
  @if(session('resp_msg'))
      <div class="alert alert-success text-center mx-auto">
          {{ session('resp_msg') }}
      </div>
  @endif

  @if(session('err_msg'))
      <div class="alert alert-danger text-center mx-auto">
          {{ session('err_msg') }}
      </div>
  @endif
  <a href="/add-mahasiswa" class="btn btn-success float-end mb-3">Tambah Data</a>
  
<table>
  <thead>
    <tr>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Action</th>
</thead>
<tbody>
  @foreach ($mahasiswa as $item)
      <tr>
      <td>{{ $item->nrp }}</td>
      <td>{{ $item->nama }}</td>
      <td>{{ $item->email }}</td>
      <td>
      <a href="{{ url('/edit-mahasiswa/' . $item->nrp) }}" class="btn btn-primary btn-sm">Edit</a>
      <a href="{{ url('/delete-mahasiswa/'.$item->nrp) }}" class="btn btn-danger btn-sm">Delete</button>
      </td>
      </tr>
      @endforeach
</tbody>

</table>

</body>
</html>