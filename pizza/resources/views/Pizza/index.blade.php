@extends('layouts.app')

@section('content')
<h1>Welcome ! to pizza house</h1>

<div>

    <h2>Pizza list</h2>

    @foreach($pizzas as $pizza)
    <div>
       {{ $pizza->name }} - {{ $pizza->ype }} -  {{$pizza->price }}
    </div>
    @endforeach

</div>
@endsection