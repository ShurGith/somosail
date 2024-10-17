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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categs = Category::all();
        return view('components.pagina.gestion.create', compact('categs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
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
