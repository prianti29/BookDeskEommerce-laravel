@extends('admin.layouts.app')
@section('page_title')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Product</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Product</li>
        </ol>
    </div>
</div>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Product List</h3>
        <div class="card-tools">
            <a class="btn btn-success pull-right" href="{{ url('/admin/products/create') }}">Add New Product</a>
        </div>
    </div>




{{-- changes --}}

    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <td>Name</td>
                <td>Price</td>
                <td>Discount Amonunt</td>
                <td>Stock</td>
          
                <td>#</td>
            </tr>
            @foreach ($product_list as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->discount_amount }}</td>
                <td>{{ $item->stock }}</td>
               
                <td>

                    {{-- <a href="{{ url("/admin/products/$item->id/edit") }}" class="btn btn-info">Edit</a> --}}
                   <form action="{{ url("/admin/products/$item->id") }}" method="post" style="display:inline"
                        onSubmit="return confirm('Are you sure you want to delete?')">
                        @csrf
                        @method("delete")
                        <input type="submit" class="btn btn-info" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>













    <!-- /.card-body -->
    <div class="card-footer">
    </div>
    <!-- /.card-footer-->
</div>
@endsection
