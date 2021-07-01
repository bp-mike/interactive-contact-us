@extends('layouts.app')
@section('title') home @endsection

@section('content')
    <h1>Home</h1>    
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, consequatur quisquam commodi error debitis maiores ex cupiditate, facere ad vitae consequuntur rem nisi odio repellendus optio ipsum omnis nobis. Inventore.</p>
@endsection

@section('sidebar')
    @parent
    <p>this is sidebar</p>
@endsection