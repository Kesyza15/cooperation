@extends('layouts.main')

@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success mb-1">
        <p>{{ $message }}</p>
    </div>
@endif

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
        <tr>
            <th>Total Simpanan</th>
            <td>: {{ $customer->mandatorySavings->sum('amount') }}</td>
        </tr>
    </table>
</div>

<div class="mb-2 mt-5">
    <h1>Riwayat Pembayaran Simpanan Wajib</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Tanggal Bayar</th>
                <th class="text-center">Jumlah</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($customer->mandatorySavings as $ms)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $ms->date }}</td>
                    <td class="text-center">{{ $ms->amount }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mb-3 mt-5">
        <a href="{{ route('customers.index') }}" class="btn btn-secondary float-end" title="Kembali">Kembali</a>
    </div>
</div>

@endsection
