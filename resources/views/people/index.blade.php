<h1>Selamat Datang</h1>

<h4>Nama Saya adalah {{ $name }}</h4>

@if ($grade >= 60)
    <h4>Selamat anda LULUS!</h4>
@else
    <h4>Maaf anda TIDAK LULUS!</h4>
@endif

@for ($i = 1; $i <= 10; $i++)
    {{ $i }}
@endfor