@extends('layouts.layout')

@section('content')
<h1>Welcome ! to pizza house</h1>

<div>

    <h2>Pizza list</h2>
    <div class="container">
       <p> {{$pizza->name}} - {{$pizza->type}} - {{$pizza->price}} </p>
    </div>

    

</div>
@endsection