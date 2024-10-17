<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function store(Request $request)
    {
       // $fileName = time().'.'.$request->file_image->extension();
       $fileName = time().'-'.$request->file_image->getClientOriginalName();
      //  $request->file_image->move(public_path('images/posts/'), $fileName);
         $request->file_image->storeAs('public/images/posts/', $fileName);

        $post = Post::create([
            'title' => $request->titulo,
            'excerpt' => $request->excerpt,
            'image'=> $fileName,
            'content' => $request->content,
            'is_published' => 1,//$request->is_published,
            'autor_id' =>  $request->user_id,
        ]);

        DB::table('category_post')->insert([
            'post_id' => $post->id,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
        ]);

        // return redirect()->action([ComunidadController::class, 'create']);
        // return back()->withInput();
        return redirect('/create')->with('status', 'Post Añadido Correctamente!');
    }

    public function create()
    {
        $categs = Category::all();
        return view('components.pagina.gestion.create', compact('categs'));
    }


    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
