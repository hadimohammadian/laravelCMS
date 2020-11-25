@extends('layout.master')




@section('content')

<h2>Create Articles Page</h2>

<form action="/admin/articles/create" method="POST">
    @csrf
<label for="name" class="form-control">Name</label>
<input type="text" id="name"  name="name" class="form-control">
<br>
<button class="btn btn-info" type="submit">Send</button>
</form>



@endsection
