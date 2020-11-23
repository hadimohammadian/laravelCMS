@extends('layout.master')


@section('content')
    <h1>Contact</h1>
@endsection


@section('sidebar')

    @parent
<div class="card my-4">
    <h5 class="card-header bg-warning">Contact Side Widget</h5>
    <div class="card-body">
      You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
    </div>
  </div>
@endsection