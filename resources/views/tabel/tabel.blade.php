@extends('layouts.app')

@section('title')
Tabel | DataTableOi
@endsection

@section('content')
<h3>Data Tabel</h3>
<div class="form-search">
  <form action="{{ url('/tabel/search') }}" method="GET">
    <label for="search">Cari Data :</label>
    <input type="text" id="query" name="query" placeholder="Cari data disini">
    <button type="submit" class="btn cari">Search</button>
</form>
</div>

<button type="button" class="btn btn-tambah">
  <a href="/tabel/tambah">Tambah Data</a>
</button>
<table class="table-data">
  <thead>
    <tr>
    <th>Item Code</th>
                            <th>Description 1</th>
                            <th>Description 2</th>
                            <th>Volume</th>
                            <th>Destination</th>
                            <th>GTIN Numbers</th>
                            <th>Pabrik</th>
                            <th>Kemasan</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($tabels as $tabel)
    <tr>
    <td>{{$tabel->ItemCode}}</td>
    <td>{{$tabel->description1}}</td>
    <td>{{$tabel->description2}}</td>
    <td>{{$tabel->volume}}</td>
    <td>{{$tabel->destination}}</td>
    <td>{{$tabel->GTINNumbers}}</td>
    <td>{{$tabel->Pabrik}}</td>
    <td>{{$tabel->Kemasan}}</td>
      <td>
        <a href="/tabel/edit/{{ $tabel->id_table }}">Edit</a>
        <a href="/tabel/hapus/{{ $tabel->id_table }}">Hapus</a>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="5" style="text-align: center">Data Kosong</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection