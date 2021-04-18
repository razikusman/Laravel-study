@extends('layouts.layout')

@section('content')
<h1>Welcome ! to pizza house</h1>

<div>

    <h2>Pizza list</h2>

    <div>
        <p>{{ $name }}</p>
    </div>

    <!-- @for($i = 0 ; $i < count($pizzas) ; $i++)
    <p> Name :- {{ $pizzas[$i]['name'] }} | Type :- {{ $pizzas[$i]['type'] }} | Price :- {{ $pizzas[$i]['price'] }} </p>
    @endfor -->

    @foreach($pizzas as $pizza)
    <div>
        {{$loop-> index +1}} Name :- {{$pizza['name']}} | Type :- {{ $pizza['type'] }} | Price :- {{ $pizza['price'] }}
        @if($loop -> last)
            <p>-last in the loop</p>
        @endif
    </div>
    @endforeach

</div>
@endsection