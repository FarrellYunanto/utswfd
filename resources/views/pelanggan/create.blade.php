@extends('base.base')

@section('content')
    <form action="{{ route('pelanggan.insert') }}" method="POST">
        @csrf

        <h3>Input data Pelanggan</h3>
        <label for="nama">nama</label>
        <input class="form-control" type="text" name="nama" id="">
        <label for="nama">Tahun Masuk</label>
        <input class="form-control" type="number" min="1" name="tahun_masuk" id="">
        <label for="nama">Tanggal Lahir</label>
        <input class="form-control" type="date" name="tgl_lahir" id="">
        <label for="nama">alamat</label>
        <input class="form-control" type="text" name="alamat" id="">

        <label for="nama">Referensi Pelanggan</label>
        <Select nama="referal">
            @foreach ($pelanggan as $p)
             <option value="{{$p->nama}}"> {{$p->nama}}</option>
            @endforeach
        </Select>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection