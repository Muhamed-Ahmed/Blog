@extends('layouts.app')
@section('content')

<form method="POST" action="{{ route('Posts.store') }}">
    @csrf
    <div class="container">
        <div class="mb-3">
            <label>Title</label>
            <input name="title" type="text" class="form-control" 
            id="exampleFormControlInput1" placeholder="Title">
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" 
            id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <label>User</label>
         <select class="form-control" name="user_id">
           @foreach($users as $user) 
              <option value={{ $user->id }}>{{ $user->name }}</option>
            @endforeach
          </select> 
        <button type="submit" class="btn btn-success mt-3">Create Post</button>
    </div> 
</form>
@endsection