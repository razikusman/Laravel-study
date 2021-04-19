@extends('layouts.layout')

@section('content')
<h1>Welcome ! to pizza house</h1>

    <form action="/pizza" method="POST">
        @csrf
        <h2>Add new Pizza to the list</h2>

        <div>
            <label for="name">Name</label>
            <input name ="name" type="text">
        </div>

        <div>
            <label for="type">Type</label>
            <input name ="type"  type="text">
        </div>

        <div>
            <label for="price">Price</label>
            <input name ="price"  type="text">
        </div>

        <div>
            <fieldset>
                <label for="toppings"> Extra Toppings </label>
                <input type="checkbox" name="toppings[]" value="mashrooms">Mashrooms <br>
                <input type="checkbox" name="toppings[]" value="garlic">Garlic <br>
                <input type="checkbox" name="toppings[]" value="pepper">Pepper <br>
                <input type="checkbox" name="toppings[]" value="olive">Olive <br>
            </fieldset>
        </div>

        <input type="Submit" value ="create"> 
    </form>
@endsection