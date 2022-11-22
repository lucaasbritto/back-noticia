<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias;
use App\Models\Categorias;

class NoticiaController extends Controller
{
    
    public function index()
    {        
        $request = request()->query();       

        $noticia = Noticias::query();

        $noticia->with('categorias');       
        
        $noticia->when(!empty($request['search']), function($query) use ($request){
            $query->where('title', 'LIKE', '%'.$request['search'].'%')
                  ->orWhereHas('categorias', function($query) use ($request) {
                        $query->where('categoria', 'LIKE', '%'.$request['search'].'%');
                    });
            });
            
        return $noticia->get();
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
       $noticia = new Noticias; 

       $noticia->categoria_id = $request->categoria;
       $noticia->title = $request->title;
       $noticia->body = $request->noticia;

       $noticia->save();

    }

    
    public function show($id)
    {        
        return Noticias::with('categorias')->find($id); 
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
