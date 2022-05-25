@extends('layouts.app')
@section('content')



<form method="POST" action="{{ route('posts.update', ['post' => $post->id])}}">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="mb-3">
            <label>Title</label>
            <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $post->description }}</textarea>
        </div>

        <label>User</label>
        <select class="form-control" name="user_id">
           @foreach($users as $user) 
              <option value={{ $user->id }}>{{ $user->name }}</option>
            @endforeach
          </select> 

        <button type="submit" class="btn btn-primary mt-3">Update Post</button>
        <a href="http://127.0.0.1:8000/posts" class="">
            <button type="button" class="btn btn-secondary mt-3">Back</button>
        </a>
    </div> 
</form>



@endsection