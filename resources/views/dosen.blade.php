@extends('adminLayout/index')
@section('content') 
Tabel Dosen
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <td class="bg-success">NIP</td>
        <td class="bg-danger">NAMA</td>
        <td class="bg-info">MATA KULIAH</td>
        <td class="bg-primary">ALAMAT</td>
      </tr>
    </thead>
    <tbody>
        @foreach ($Dosen as $item)
            
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td class="bg-success"> {{$item->nip}} </td>
            <td class="bg-danger"> {{$item->name}}</td>
            <td class="bg-info"> {{$item->matkul}}</td>
            <td class="bg-primary"> {{$item->alamat}}</td>
        </tr>
        
        @endforeach
    </tbody>
  </table>
@endsection