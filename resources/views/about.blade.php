@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<div class="card">
    <div class="card-header">Tentang Kami</div>
    <div class="card-body">
        <p>Ini adalah halaman tentang aplikasi latihan Laravel.</p>
        <p>Dibuat untuk pembelajaran 30 hari.</p>
        <a href="/" class="btn btn-secondary">Kembali</a>
    </div>
    <ul>
        $kontak = [
        'email'   => 'latihan@example.com',
        'telepon' => '0812-3456-7890',
        ];
    <ul>
</div>
@endsection