<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function post_page()
    {

        return view('admin.post_page');
    }

    public function add_post(Request $request)
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
        return redirect()->back()->with('message', 'Post Added Successfuly');
    }

    public function show_posts()
    {
        $posts = Post::all();

        return view('admin.show_posts', compact('posts'));
    }
    public function delete_post(Request $request)
    {
        $post = Post::where('id', $request->id)->first();

        $post->delete();

        return redirect()->back();
    }

    public function edit_post(Request $request)
    {
        $post = Post::where('id', $request->id)->first();


        return view('admin.edit_post', compact('post'));
    }
    public function update_post(Request $request)
    {
        $post = Post::where('id', $request->id)->first();

        $post->title = $request->title;
        $post->description = $request->description;
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            $post->image = $imagename;
        }
        $post->update();

        return redirect()->route('admin.post_index');
    }
}
