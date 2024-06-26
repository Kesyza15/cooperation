@extends('layouts.main')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <p>ERROR!!!</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            Pembayaran Simpanan Wajib
            <a href="{{ route('mandatory-saving.index') }}" class="btn btn-secondary float-end" title="Kembali">Kembali</a>
        </div>

        <div class="card-body">
            <form action="{{ route('mandatory-saving.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="customer_id">Pilih Nasabah:</label>
                    <select name="customer_id" id="customer_id" class="form-select">
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->code . ' - ' . $customer->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="amount">Jumlah:</label>
                    <input type="number" name="amount" id="amount" placeholder="10000" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Simpan" class="btn btn-success" title="Simpan">
                    <input type="reset" value="Reset" class="btn btn-danger" title="Reset">
                </div>
            </form>
        </div>
    </div>

@endsection
