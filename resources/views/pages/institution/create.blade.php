@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <div class="page-heading">
            <div class="page-title mb-3">
                <h3>
                    <span class="bi bi-building"></span>
                    Create New | Institution
                </h3>
            </div>
        </div>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.institution.store') }}">
                        @csrf

                        <div class="form-group mb-2">
                            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form form-group mt-4 d-flex">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('admin.institution.index') }}" class="btn btn-secondary ms-auto">Batal</a>
                        </div>
                    </form>
                </div>
        </section>
    </div>
@endsection
