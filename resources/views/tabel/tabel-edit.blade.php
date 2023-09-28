@extends('layouts.app')

@section('title')
Edit Tabel | DataTableOi
@endsection

@section('content')
<h3>Edit Data Tabel</h3>
<div class="form-login">
  <form action="{{ url('/tabel/update', $tabel->id_table) }}" method="post">
    @csrf
    @method('PUT')
    <label for="ItemCode">Item Code</label>
    <input class="input" type="text" name="ItemCode" id="ItemCode" placeholder="Item Code" value="{{ old('ItemCode') }}" />
    @error('ItemCode')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="description1">Description1</label>
    <input class="input" type="text" name="description1" id="description1" placeholder="description 1" value="{{ old('description1') }}" />
    @error('description1')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="description2">Description2</label>
    <input class="input" type="text" name="description2" id="description2" placeholder="description 2" value="{{ old('description2') }}" />
    @error('description2')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="volume">volume</label>
    <input class="input" type="text" name="volume" id="volume" placeholder="Volume" value="{{ old('volume') }}" />
    @error('volume')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="destination">destination</label>
    <input class="input" type="text" name="destination" id="destination" placeholder="Volume" value="{{ old('destination') }}" />
    @error('destination')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="GTINNumbers">GTIN Numbers</label>
    <input class="input" type="text" name="GTINNumbers" id="GTINNumbers" placeholder="GTIN Numbers" value="{{ old('GTINNumbers') }}" />
    @error('GTINNumbers')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="Pabrik">Pabrik</label>
    <input class="input" type="text" name="Pabrik" id="Pabrik" placeholder="Pabrik" value="{{ old('Pabrik') }}" />
    @error('Pabrik')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="Kemasan">Kemasan</label>
    <input class="input" type="text" name="Kemasan" id="Kemasan" placeholder="Kemasan" value="{{ old('Kemasan') }}" />
    @error('Kemasan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection