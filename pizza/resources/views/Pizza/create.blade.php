@extends('layouts.layout')

@section('content')
<h1>Welcome ! to pizza house</h1>

    <div class="container">

        <h2>Add new Pizza</h2>

        <div>
            <label for="name">Name</label>
            <input type="text">
        </div>

        <div>
            <label for="type">Type</label>
            <input type="text">
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text">
        </div>
    </div>
@endsection