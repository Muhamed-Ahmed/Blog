@extends('layouts.app')
@section('content')

        <a href="{{ Route('posts.create') }}"><button type="button" class="btn btn-success mt-3">Create Post</button></a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              
                @foreach ($Posts as $Post)
                
              <tr>
                <th scope="row">{{ $Post->id }}</th>
                <td>{{ $Post->title }}</td>
                {{-- @dd($Post->User) --}}
                <td>{{ $Post->User ? $Post->User->name : 'user not found'  }}</td>
                <td>{{ $Post->created_at->format('Y-m-d H:00 A') }}</td>
                
                <td>
                    <a href="{{ route('posts.show', ['post' => $Post->id]) }}" class="btn btn-info">View</a>
                    <a href="{{ route('posts.edit', ['post' => $Post->id]) }}" class="btn btn-primary">Edit</a>
                    <form style="display: inline" method="POST" action="{{ route('posts.destroy',['post' => $Post->id])}}">
                      @method('DELETE')
                      @csrf
                      <button class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')" type="submit">Delete</button>
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
   @endsection
   