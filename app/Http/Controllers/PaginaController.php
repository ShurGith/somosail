<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('show',compact('posts', 'posts_lasts'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }


    public function categs()
    {
        $categs = Category::get();
        return view('home',
                    ['pagina' => 'Categs',
                    'grupo'=>'categs',
                    'datos' => $categs]);
    }
    public function home(Request $request)
    {
        $pagina = "home";
        $grupo = $pagina;
        $datos = Post::all();
        $random_posts = Post::where('is_published', true)
        ->with(['categories', 'user'])
        ->inRandomOrder()
        ->limit(6)
        ->get();
        $posts_lasts = Post::where('is_published', true)
        ->with(['categories', 'user'])
        ->orderBy('created_at', 'desc')
        ->take(6)
        ->get();
        /*$filterPosts = Post::where('is_published', true)
            ->orderByDesc('created_at')
            ->limit(3)
            ->get();*/
        if ($request->wantsJson()) {
            return $random_posts;
        }else{
            return view('home',compact('datos', 'pagina', 'grupo', 'posts_lasts', 'random_posts'));
        }
    }
}
