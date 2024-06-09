@extends('layouts.main')

@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<div class="card">
    <div class="card-header">
        <a href="{{ route('customers.create') }}" class="btn btn-primary float-end" title="Tambah Data">Tambah Data</a>
    </div>

    <div class="card-body">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Kode Nasabah</th>
                    <th class="text-center">Nama Nasabah</th>
                    <th class="text-center">Nomor Telepon Nasabah</th>
                    <th class="text-center">Alamat Nasabah</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $customer->code }}</td>
                        <td class="text-center">{{ $customer->name }}</td>
                        <td class="text-center">{{ $customer->phone }}</td>
                        <td class="text-center">{{ $customer->address }}</td>
                        <td class="text-center">
                            <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-light" title="Lihat Data"><i class="fas fa-eye"></i></a>
                            {{-- <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-warning" title="Edit Data"><i class="fas fa-pen"></i></a>
                            <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-danger" title="Hapus Data"><i class="fas fa-trash"></i></a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection