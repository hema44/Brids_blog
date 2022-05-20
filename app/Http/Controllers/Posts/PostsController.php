<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Posts\CreatePostRequest;
use App\Http\Requests\Posts\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('VerifyCategoriesCount')->only(['create', 'store']);
    }

    public function index()
    {
        return view('posts.index')->with('posts', Post::all());
    }

    public function create()
    {
        return view('posts.create')->with('categories', Category::all());
    }

    public function store(CreatePostRequest $request)
    {
        //upload image to storage
        $post_image = $_FILES['image']['name'];
        $post_image_temp = $_FILES['image']['tmp_name'];
        move_uploaded_file($post_image_temp,"images/posts/$post_image");

        //create post
        $post =  Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'body' => $request->body,
            'image' => $post_image,
            'published_at' => $request->published_at,
            'category_id' => $request->category,
            'tages'=> $request->tages,
            'user_id' => auth()->user()->id
        ]);

        return redirect(route('posts.index'))->with('success', 'Your post is successfully created !');

    }

    public function show($id)
    {
        //
    }

    public function edit(Post $post)
    {
        return view('posts.create')->with('post', $post)->with('categories', Category::all());
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->only(['title','description', 'body', 'category','tages']);

        if($request->hasFile('image')){

            //upload image to storage
            $post_image = $_FILES['image']['name'];
            $post_image_temp = $_FILES['image']['tmp_name'];
            move_uploaded_file($post_image_temp,"images/posts/$post_image");

            $data['image'] = $post_image;
        }

        $post->update($data);

        return redirect(route('posts.index'))->with('success', 'Your Post is successfully updated ! ');

    }

    public function destroy($id)
    {
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();


        if($post->trashed())
        {
            $post->forceDelete();
        }
        else{
            $post->delete();

        }

        return redirect(route('posts.index'))->with('success', 'Your post is deleted successfully ! ');
    }

    public function trashed()
    {
        $trashed = Post::onlyTrashed()->get();


        return view('posts.index')->with('posts',$trashed);
    }

    public function restore($id){

        $post = Post::withTrashed()->where('id', $id)->firstOrFail();

        $post->restore();

        return redirect(route('posts.index'))->with('warning', 'Your Post is successfully restored !');

    }
}
