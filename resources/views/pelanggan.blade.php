
@extends('base.base')


@section('content')
<a class="btn btn-primary my-3" href="{{ route('pelanggan.create') }}">Tambah data</a>
    <table class="table table-border table-stripped">
        <thead>
            <tr>
                <th>
                    No
                </th>
                <th>
                    Nama
                </th>
                <th>
                    Tahun Masuk
                </th>
                <th>
                    Tanggal Lahir
                </th>
                <th>History pembelian</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelanggan as $data)
            <tr>
                <td>{{ $loop->iteration}} </td>
                <td>{{ $data->nama}}</td>
                <td>{{ $data->tahun_masuk}}</td>
                <td>{{ $data->tgl_lahir}}</td>
                <td>
                    @foreach ($data->pembelian as $row )
                        {{$row->nomor_pembelian}}
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <table class="table table-border table-stripped">
        <thead>
            <tr>
                <th>
                    No
                </th>
                <th>
                    Nomor Pembelian
                </th>
                <th>
                    Tanggal Beli
                </th>
                <th>
                    Nama Pelanggan
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembelian as $data)
            <tr>
                <td>{{ $loop->iteration}} </td>
                <td>{{ $data->nomor_pembelian}}</td>
                <td>{{ $data->tanggal}}</td>
                <td>{{ $data->pelanggan->nama}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection

