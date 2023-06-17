<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Mail\PostLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth'])->only(['store', 'destroy']);
    // }
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        $posts = Post::latest()->with(['user', 'likes'])->paginate(10);
       
        $user = auth()->user();
        // Mail::to($user)->send(new PostLiked());
        return view('posts.index', [
            'posts' => $posts
        ]);
    }
    // public function index(User $user)
    // {
    //     $posts = $user->posts()->with(['user', 'likes'])->paginate(10);

    //     return view('users.posts.index', [
    //         'user' => $user,
    //         'posts' => $posts
    //     ]);
    // }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'platform' => 'required',
            'link' => 'required',
            'date' => 'required',
            'time' => 'required'
        ]);

        $request->user()->posts()->create($request->only('title', 'platform','link', 'date', 'time'));

        return back();
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return back();
    }
}
