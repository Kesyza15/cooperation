@extends('layouts.main')

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $item)
                 <li>{{ $item }}</li>
            @endforeach
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            Form Pendaftaran
        </div>

        <div class="card-body">
            <form action="{{ route('customers.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="">Kode Pelanggan : </label>
                    <input type="text" name="code" placeholder="Kode Pelanggan" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Nama Pelanggan : </label>
                    <input type="text" name="name" placeholder="Nama Pelanggan" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Nomor Telepon Pelanggan : </label>
                    <input type="text" name="phone" placeholder="Nomor Pelanggan" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Alamat Pelanggan : </label>
                    <textarea name="address" cols="169" rows="3" placeholder="Alamat Pelanggan"></textarea>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection