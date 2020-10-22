@extends('layouts.app')

@section('content')
<div class="container">
   <form action="add" method="POST">
    @csrf
        <div class="form-group">
            <label for="usr">Name:</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea name="body" cols="30" rows="4" class="form-control"></textarea>
        </div>
    </br>
    <input type="submit" value="add new" class="btn btn-primary">

   </form>

</div>
@endsection