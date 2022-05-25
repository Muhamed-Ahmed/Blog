@extends('layouts.app')
@section('content')
    <div class="card">
            <div class="card-header">
              Post Info
            </div>
            <div class="card-body">
                <h5 class="card-title"><b>ID: </b>{{ $post->id }}</h5>
              <h5 class="card-title"><b>Title: </b>{{ $post->title }}</h5>
              <h5 class="card-title"><b>Description: </b>{{ $post->description }}</h5>
              <a href="http://127.0.0.1:8000/posts">
                <button type="button" class="btn btn-secondary">Back</button>
              </a>
            </div>
    </div>
@endsection

