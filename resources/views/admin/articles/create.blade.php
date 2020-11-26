@extends('layout.master')




@section('content')

<h2>Create Articles Page</h2>

<form action="/admin/articles/create" method="POST">
    @csrf


     <div class="form-group">
        <label for="title">Title : </label>
        <input type="text" id="title"  name="title" class="form-control">
     </div>
     <div class="form-group">
        <label for="body">body : </label>
        <input type="text" id="body"  name="body" class="form-control">
     </div>
    <button class="btn btn-info" type="submit">Send</button>
</form>



@endsection
