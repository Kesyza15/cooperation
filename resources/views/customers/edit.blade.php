@extends('layouts.main')

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <p>ERROR!!!</p>
            @foreach ($errors->all() as $item)
                 <li>{{ $item }}</li>
            @endforeach
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            Ubah Data Nasabah Kode #{{ $customer->code }}
            <a href="{{ route('customers.index') }}" class="btn btn-secondary float-end" title="Kembali">Kembali</a>
        </div>

        <div class="card-body">
            <form action="{{ route('customers.update')}}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $customer->id }}">
                <div class="mb-3">
                    <label for="">Nama Nasabah : </label>
                    <input type="text" name="name" placeholder="Nama Nasabah" class="form-control" value="{{ $customer->name }}">
                </div>
                <div class="mb-3">
                    <label for="">Nomor Telepon Nasabah : </label>
                    <input type="text" name="phone" placeholder="Nomor Nasabah" class="form-control" value="{{ $customer->phone }}">
                </div>
                <div class="mb-3">
                    <label for="">Alamat Nasabah : </label>
                    <textarea name="address" cols="165" rows="3" placeholder="Alamat Nasabah">{{ $customer->address }}</textarea>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Simpan" class="btn btn-success" title="Simpan">
                    <input type="Reset" value="Reset" class="btn btn-danger" title="Reset">
                </div>
            </form>
        </div>
    </div>
@endsection