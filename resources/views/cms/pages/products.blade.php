@extends('cms.layouts.index')
@section('title', 'Products')
@section('body')
    <div class="container pt-5">
        <h1>Products</h1>
        <a href="{{ URL::route('cms.product.add') }}" class="btn btn-success">
            Add Product
        </a>
        <br>
        <br>

        <table class="table table-bordered">
            <tr>
                <th>Images</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Details</th>
                <th></th>
            </tr>
            @foreach($data as $x)
                <tr>
                    <td width="10%">
                        <img src="{{ URL::asset('storage/'. $x->image1) }}" width="30%">
                        <img src="{{ URL::asset('storage/'. $x->image2) }}" width="30%">
                        <img src="{{ URL::asset('storage/'. $x->image3) }}" width="30%">
                    </td> 
                    <td>{{ $x->name }}</td> 
                    <td>{{ $x->category }}</td> 
                    <td>{{ $x->price }}</td> 
                    <td>{{ $x->details }}</td> 
                    <th>
                        <a class="btn btn-success">Update</a>
                        <a class="btn btn-danger">Delete</a>
                    </th>
                </tr>
            @endforeach
        </table>
    </div>
@endsection