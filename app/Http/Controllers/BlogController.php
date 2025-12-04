<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class BlogController extends Controller
{
    public function index()
    {

        return view('pages.blog', [
            'posts' => Post::all(),
            'title' => 'Blog'
        ]);

    }

    public function single(Post $post)
    {

        $category = $post->category;

        // dd(Post::where('slug', $slug)->get()->first()->title );
        // $category_id = $post->category_id;

        // $category_name = DB::table('categories')->where('id', $category_id)->get()->first()->name;
        // $category_slug = DB::table('categories')->where('id', $category_id)->get()->first()->slug;

        return view('pages.blog-details', [
            'data' => $post,
            'category' => $category,
            // 'slug' => $category_slug
        ]);
    }

    public function model_test()
    {
        dd(Post::all());
    }

    public function categoryWisePosts(Category $category)
    {

        return view('components.blog.category', [
            'title' => $category->name,
            'posts' => $category->posts
        ]);
    }

    public function userBasedPost(User $user)
    {

        return view('components.blog.user-post', [
            'title' => $user->name,
            'user' => $user
        ]);
    }

}

