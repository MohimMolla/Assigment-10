@extends('layouts.admin-templeate')
@section('content')
    <div class="cotainer">
	<form method="POST" action="{{route('product.store')}}">
		@csrf
		<div class="form-group">
		  <label for="name">Name</label>
		  <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
		 
		</div>
		<div class="form-group">
		  <label for="price">Password</label>
		  <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
		</div>
		<div class="form-group form-check">
		  <input type="checkbox" class="form-check-input" id="exampleCheck1">
		  <label class="form-check-label" for="exampleCheck1">Check me out</label>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	        </form>
    </div>
@endsection
