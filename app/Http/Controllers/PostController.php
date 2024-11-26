<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function store(Request $request, PostRequest $postRequest)
    {
        $fileName = time().'-'.$request->file_image->getClientOriginalName();
         $request->file_image->storeAs('public/images/posts/', $fileName);

        $post = Post::create([
            'title' => $request->titulo,
            'excerpt' => $request->excerpt,
            'image'=> $fileName,
            'content' => $request->content,
            'is_published' => ($request->publicado) ? 1 : 0,
            'publico' => ($request->publico) ? 1 : 0,
            'user_id' =>  $request->user_id,
        ]);

        DB::table('category_post')->insert([
            'post_id' => $post->id,
            'category_id' => $request->category_id,
        ]);
       // return redirect('/create')->warningBanner('Subscription pending approval.');
       return redirect('/create')->with('success','Post Correcto');
    }
    public function show(Post $post)
    {
        $randoms = Post::where('id', '!=', $post->id)
             ->inRandomOrder()
             ->take(4)
             ->get();
        return view('home',
                    ['pagina'=>'show',
                    'grupo'=>'show',
                    'datos'=>$post,
                    'randoms'=>$randoms
                ]);
    }

    public function create()
    {
        $categs = Category::all();
        return view('components.pagina.gestion.create', compact('categs'));
    }


    public function edit(Post $post)
    {
        $categs = Category::all();
        $usuarios = User::all();
        return view('components.pagina.gestion.edit', compact('post', 'categs', 'usuarios'));
    }

    public function update( Request $request,  $id)
    {
        $post = Post::findOrFail( $id);
        $post->title = $request->titulo;
        $post->excerpt = $request->excerpt;
        if($request->file_image != $post->image && $request->file_image ){
            $antigua = $post->image;
            Storage::delete("public/images/posts/".$antigua);
            $fileName = time().'-'.$request->file_image->getClientOriginalName();
            $request->file_image->storeAs('public/images/posts/', $fileName);
            $post->image = $fileName;
          }
        $post->content= $request->content;
        $post->is_published = ($request->publicado) ? 1 : 0;
        $post->publico = ($request->publico) ? 1 : 0;
        $post->user_id =  $request->user_id;
        $post->save();
        DB::table('category_post')->where('post_id', $id)->update([
        'category_id' => $request->category_id,
    ]);
        return redirect()->back()->with('success','Post Actualizado');
    }

    public function publicado(Request $request, $id)
    {
        $post = Post::findOrFail( $id);
        $post->is_published = ($request->publicado) ? 1 : 0;
        $post->save();
        return redirect()->back()->with('success','Post Actualizado');
    }

    public function publico(Request $request, $id)
    {
        $post = Post::findOrFail( $id);
        $post->publico = ($request->publico) ? 1 : 0;
        $post->save();
        return redirect()->back()->with('success','Post Actualizado');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->with('status','Post Elimimado');
    }

    public function postList(Request $request)
    {
        $posts = Post::paginate(10);
        return view('components.pagina.gestion.post-list', compact('posts'));
    }
}
