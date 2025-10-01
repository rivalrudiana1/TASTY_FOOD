@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Informasi Website</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="card">
    <div class="card-body">
        @if($info)
            {{-- Form Update --}}
            <form action="{{ route('dashboard.info.update', $info->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
        @else
            {{-- Form Create --}}
            <form action="{{ route('dashboard.info.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
        @endif

            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" 
                               value="{{ old('email', $info->email ?? '') }}">
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="text" class="form-control" id="telepon" name="telepon" 
                               value="{{ old('telepon', $info->telepon ?? '') }}">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ old('alamat', $info->alamat ?? '') }}</textarea>
                    </div>
                </div>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save me-2"></i>
                    {{ $info ? 'Update Informasi' : 'Simpan Informasi' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
