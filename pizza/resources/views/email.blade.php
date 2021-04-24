@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <a href="/home" > <button class="btn btn-primary">home</button></a>

            </div>

            <!-- @include('layouts.flash') -->
            <x-alert>
                <p>User Image Upload status</p>
            </x-alert>

            <form action="/send/image" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" id="image" name="image">

                <input type="submit" value="submit">
            </form>
        </div>
    </div>
</div>
@endsection
