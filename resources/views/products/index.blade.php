@extends('layout')
@section('content')

<div>
    
    <div class="text-center">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>

    <div class="my-3 text-center">
        <h4>Table of products</h4>
    </div>

    <div class="my-3 d-flex justify-content-between">
        <a href="{{ route('categories.index') }}" class="btn btn-info text-white ">Categories</a>        
        <a class="btn btn-success" href="{{ route('products.create') }}"> Product create</a>
    </div>

    <table class="table rounded-3 shadow-sm">
          <thead class="bg-secondary border border-bottom border-secondary text-white">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">category</th>
                <th scope="col"></th>
              </tr>
          </thead>
          <tbody>
            
            @foreach ($products as $product)
              <tr>

                  <th scope="row">{{ $product->id }}</th>

                  <td> {{ $product->name }}</td>
                  <td> {{ $product->price }}</td>
                  <td> {{ $product->category_name }}</td>

                  

                  <td class="w-25">
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>

              </tr>
            @endforeach

          </tbody>
    </table>
    <div class="my-3 text-end">
        {!! $products->links() !!}
    </div>
</div>

@endsection