@extends('layout')
@section('content')

    <div class="my-1 text-center">
        <h3>Category create</h3>
    </div>

    @if (session('status'))
            <div class="alert alert-success my-1">
                {{ session('status') }}
            </div>
    @endif

    <div class="d-flex justify-content-center my-5 px-4">
        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data"
            class="w-50 shadow rounded-3 p-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Category name">
                @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sname" class="form-label">Sec_name</label>
                <input type="text" class="form-control" id="sname" name="sname" placeholder="Category sec name">
                @error('sname')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-end">
                <a class="btn btn-secondary" href="{{ route('categories.index') }}" enctype="multipart/form-data">Cancel</a>                
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>

@endsection