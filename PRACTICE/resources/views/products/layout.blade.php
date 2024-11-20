<!DOCTYPE html>
<html>
<head>
 <title>Laravel 11 CRUD Application </title>
 <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/6.5.1/css/all.min.css" />
</head>
<body>

<div class="container">
 @yield('content')
</div>

</body>
</html>
resources/views/products/index.blade.php
@extends('products.layout')

@section('content')

<div class="card mt-5">
 <h2 class="card-header">Laravel 11 CRUD Example</h2>
 <div class="card-body">

 @session('success')
 <div class="alert alert-success" role="alert"> {{ $value }}
</div>
 @endsession

 <div class="d-grid gap-2 d-md-flex justify-content-md-end">
 <a class="btn btn-success btn-sm" href="{{
route('products.create') }}"> <i class="fa fa-plus"></i> Create New
Product</a>
 </div>

 <table class="table table-bordered table-striped mt-4">
 <thead>
 <tr>
 <th width="80px">No</th>
 <th>Name</th>
 <th>Details</th>
 <th width="250px">Action</th>
 </tr>
 </thead>

 <tbody>
 @forelse ($products as $product)
 <tr>
 <td>{{ ++$i }}</td>
 <td>{{ $product->name }}</td>
 <td>{{ $product->detail }}</td>
 <td>
 <form action="{{ route('products.destroy',$product-
>id) }}" method="POST">

 <a class="btn btn-info btn-sm" href="{{
route('products.show',$product->id) }}"><i class="fa-solid fa-list"></i>
Show</a>

 <a class="btn btn-primary btn-sm" href="{{
route('products.edit',$product->id) }}"><i class="fa-solid fa-pen-tosquare"></i> Edit</a>

 @csrf
@method('DELETE')

 <button type="submit" class="btn btn-danger btnsm"><i class="fa-solid fa-trash"></i> Delete</button>
 </form>
 </td>
 </tr>
 @empty
 <tr>
 <td colspan="4">There are no data.</td>
 </tr>
 @endforelse
 </tbody>

 </table>

 {!! $products->links() !!}

 </div>
</div>
@endsection
