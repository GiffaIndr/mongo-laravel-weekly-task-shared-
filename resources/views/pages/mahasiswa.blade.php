<h1>Hello dunia</h1>
<p>
    @foreach($data as $m)
    {{ $m->nama }}
    {{ $m->jenis_kelamin }}
    {{ $m->prodi->kode }}
    {{ $m->usia }}
    @endforeach
</p>