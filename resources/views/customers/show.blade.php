@extends('layouts.main')

@section('content')
    <div class="m-2">
        <h1>Data Nasabah</h1>
        <table class="table">
            <tr>
                <th>Kode Nasabah</th>
                <td>: {{ $customer->code }}</td>
            </tr>
            <tr>
                <th>Nama Nasabah</th>
                <td>: {{ $customer->name }}</td>
            </tr>
            <tr>
                <th>Nomor Telepon Nasabah</th>
                <td>: {{ $customer->phone }}</td>
            </tr>
            <tr>
                <th>Alamat Nasabah</th>
                <td>: {{ $customer->address }}</td>
            </tr>
        </table>
        
        <div class="mb-3">
            <a href="{{ route('customers.index') }}" class="btn btn-secondary float-end" title="Kembali">Kembali</a>
        </div>
    </div>
@endsection