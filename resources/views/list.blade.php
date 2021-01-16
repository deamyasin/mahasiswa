{{-- @extends('adminLayout/index')
@section('content')
Cek halaman Mahasiswa Dea Muhamad Yasin
@endsection
 --}}

@extends('adminLayout/index')
{{-- @include('pagination') --}}
@section('content')
  <div class="container-fluid">
    <div class="row">
  TABEL MAHASISWA
<table class="table table-striped table-light">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">NPM</th>
        <th scope="col">Nama</th>
        <th scope="col">Kelas</th>
        <th scope="col">Organisasi</th>
        <th scope="col">Alamat</th>
        <th> Action </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswa as $item)
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->npm}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->class}}</td>
            <td>{{$item->organization->nama}}</td>
            <td>{{$item->alamat}}</td>
            <td> <a href="/list/detail1/{{$item->slug}}" class="btn btn-success btn-sm">edit </a></td>
            <td> <form action="/list/delete/{{$item->slug}}" method="post">
            @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
              </form> </td>
            
          </tr>         
        @endforeach
    </tbody>
  </table>

  {{-- Pagination --}}

  <div class='row'>
    <a href="/createmhs" class="btn btn-success btn-sm">Create</a>
  </div>
  
  
</div>

</div>
<div class="d-flex justify-content-center">
  {!! $mahasiswa->links('pagination') !!}
</div>

{{-- <div class="d-flex justify-content-center">
  {!! $mahasiswa->appends(['sort' => 'science-stream'])->links('pagination') !!}
</div>  --}}


@endsection
