<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categs = Category::all();
        return view('components/pagina/gestion/categorias/index', compact('categs'));
    }

    public function create()
    {

    }
    public function edit(Category $category )
    {

        return view('components/pagina/gestion/categorias/edit', compact('category'));
    }
    public function update( Request $request,  $id)
    {
        $categ = Category::findOrFail($id);
        //dd($categ);
        $logo = $categ->logo;
        if($request->logo != $categ->logo && $request->logo ){
            $antigua = $categ->logo;
            Storage::delete("public/images/logos/".$antigua);
            $fileName = $request->logo->getClientOriginalName();
            $request->logo->storeAs('public/images/logos/', $fileName);
            $logo = $fileName;
          }
        DB::table('categories')->where('id', $id)->update([
        'name'=> $request->name,
        'ico'=> $request->ico,
        'logo_color'=> $request->logo_color,
        'primary_color'=> $request->primary_color,
        'secondary_color'=> $request->secondary_color,
        'opacidad'=> $request->opacidad,
        'description'=> $request->description,
        'logo' => $logo
        ]);
          //$categ->save()
          return redirect()->back()->with('success','Categoría Actualizada');
    }
    public function chequear(CategoryRequest $request)
    {
       return $request;
    }

}
