@extends('layouts.layout')

@section('content')
<h1>Welcome ! to pizza house</h1>

<div>

    <h2>Pizza list</h2>
    <div class="container">
       <p> {{$pizza->name}} - {{$pizza->type}} - {{$pizza->price}} </p>
       <p>Toppings</p>
       <ul>
        @foreach($pizza->topping as $topping)
            <li>{{ $topping }}</li>
        @endforeach
       </ul>
    </div>

    <h1>**************Pizza list end**************</h1>

    <a href="/pizza"> <- Go Back to all pizza </a>

</div>
@endsection