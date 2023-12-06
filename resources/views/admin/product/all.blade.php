@extends('layouts.admin-templeate')
@section('content')
    <div class="cotainer">
        <table class="table table-striped">
            <tr>
                <td>Name</td>
                <td>Price</td>
                <td>Discricption</td>
                <td>Quentaty</td>
                <td>Action</td>
            </tr>
            @foreach ($products as $products)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                        <a href="">Edit</a>
                        <a href="">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
