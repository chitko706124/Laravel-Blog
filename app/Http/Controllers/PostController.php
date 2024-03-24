<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Requests\StorePost;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $categoryId = $request->input('category');

        $query = Post::query()->with('cat')->orderByDesc('id');

        if ($categoryId !== null) {
            $query->whereHas('cat', function ($query) use ($categoryId) {
                $query->where('categories.id', $categoryId); // Specify the table alias
            });
        }

        $posts = $query->paginate(5);
        $categories = Category::all();
        return view('home', compact('posts', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('post.create', compact('categories'));
    }

    public function store(StorePost $request)
    {
        $array = [];
        $post = new Post();
        $post->user_id = auth()->id();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $request->image->store('uploads', 'public');
        $post->save();

        // $imageName = $request->image->store('uploads', 'public');

        foreach ($request->categories as $category) {
            array_push($array, ['post_id' => $post->id, 'category_id' => $category]);
        }

        BlogCategory::insert($array);

        return back();
    }

    public function show($id)
    {

        $post = Post::findOrFail($id);

        return view('render.detail-post', compact('post'))->render();
    }
}
