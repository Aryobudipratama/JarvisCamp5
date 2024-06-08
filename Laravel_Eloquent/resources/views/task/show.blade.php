@extends('template')
@section('content')
    <div class="container mt-2">
        <h1 class="text-center">Detail Tugas</h1>
        <hr>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $task['name'] }}</h4>
                <p class="card-text"><strong>Deadline:</strong> {{ \Carbon\Carbon::parse($task['deadline'])->format('d F Y') }}</p>
                <p class="card-text"><strong>Status:</strong> <span class="badge bg-warning">{{ $task['status'] }}</span></p>
                <p class="card-text"><strong>Deskripsi:</strong> {{ $task['description'] }}</p>
            </div>
        </div>
        <div class="mt-3">
        <a href="{{ url('/tasks') }}" class="btn btn-primary">Kembali ke Daftar Tugas</a>
        </div>
    </div>
@endsection
