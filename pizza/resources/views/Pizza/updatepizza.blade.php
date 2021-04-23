<form action="{{route('pizza.updatedata')}}" method="post">
@csrf

    <input type="text" name="name" value="{{$pizza->name}}">
    <input type="text" name="type" value="{{$pizza->type}}">
    <input type="text" name="price" value="{{$pizza->price}}">
    <input type="hidden" name="id" value="{{$pizza->id}}">
    <button type="submit" >Update</button>
    
</form>
