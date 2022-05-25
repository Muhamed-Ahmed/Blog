<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;

class PostController extends Controller
{
    public function index(){
        $postsFromDB = post::all();
        return view('Posts.index', ['Posts' => $postsFromDB]);
    }

    public function show(Post $post)
    {
        return view('Posts.show', ['post' => $post]);
    }

    public function create()
    {
        $users = User::all();
       // dd($users);
        return view('Posts.create', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $title = request()->title;
        $description = request()->description;
        $userid = request()->user_id;

        $post = Post::create([
            'title' => $title,
            'description' => $description,
            'user_id' => $userid
        ]);
        return redirect(route('posts.index'));
    }
    public function edit(Post $post)
    {
        $users = User::all();
        // dd($users);
        // Load user/createOrUpdate.blade.php view
        return view('Posts.edit', ['users' => $users])->with('post', $post);
    }
    public function update(Post $post, Request $request)
    {
        $post->update([
            'title' => $request->title,
            'description' => $request->description
            //'user_id' => $request->$user_id
        ]);
        return redirect(route('posts.index'));   
    }
    public function destroy(Post $post)
    {
    $post->delete();
    return redirect()->route('posts.index')
    ->withSuccess(__('Post delete successfully.'));
    }
    
}
