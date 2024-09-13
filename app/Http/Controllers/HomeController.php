<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function homepage()
    {
        $posts = Post::all();

        return view('home.homepage', compact('posts'));
    }

    public function index()
    {
        $posts = Post::all();

        $users = User::where('usertype', 'user')->get();
        $n_user = $users->count();

        $n_comments = Comment::all()->count();


        if (Auth::id()) {
            $userType = Auth()->user()->usertype;

            if ($userType == 'user') {
                return view('home.homepage', compact('posts'));
            } elseif ($userType == 'admin') {
                return view('admin.adminhome', ['n_users' => $n_user, 'n_posts' => $posts->count(), 'n_comments' => $n_comments]);
            } else {
                return back();
            }
        }
    }

    public function post_details(Request $request)
    {

        $post = Post::with('comments')->findOrFail($request->id);

        return view('home.post_details', compact('post'));
    }

    public function create_post()
    {


        return view('home.create_post',);
    }
    public function store_post(Request $request)
    {

        $user = Auth()->user();

        $post = new Post;

        $post->title = $request->title;
        $post->description = $request->description;
        $post->post_status = 'active';
        $post->user_id = $user->id;
        $post->usertype = $user->usertype;
        $post->name = $user->name;
        /////////////////////
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            $post->image = $imagename;
        }
        ////////////////////////////////
        $post->save();
        return redirect()->back();
    }

    public function my_posts(Request $request)
    {

        $user = Auth()->user();

        $posts = Post::where('user_id', $user->id)->get();


        return view('home.user_posts', compact('posts'));
    }

    public function addComment(Request $request, $postId)
    {
        $request->validate([
            'body' => 'required|string',
        ]);

        $user = Auth()->user();

        Comment::create([
            'post_id' => $postId,
            'author' => $user->name,
            'body' => $request->body,
        ]);

        return redirect()->back()->with('success', 'Comment added successfully!');
    }
}
