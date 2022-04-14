<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Home;

class HomeController extends Controller
{
    
    public function index()
    {
        $search = request('search');
        
        if($search){
            $homes = Home::where([
                ['tipoimovel', 'like', '%'.$search.'%']
            ])->get();
        }else{
            $homes = Home::all();
        }
        
        return view('welcome', ['homes' => $homes, 'search' => $search]);
    }

    public function create() {

        return view('homes.create');

    }

    public function contact() {

        return view('contact');

    }

    public function store(Request $request){

        $home = new Home;

        $home->tipoimovel = $request->TipoImovel;
        $home->tipolocacao = $request->TipoLocacao;
        $home->quarto = $request->quarto;
        $home->banheiro = $request->banheiro;
        $home->image = $request->image;
        $home->local = $request->local;
        $home->valor = $request->valor;


        /*if($request->hasfile('image') && $request->file('image')->isValid()){

            
            
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . "." . $extension);
            
            $requestImage->store(public_path('img/homes'), $imageName);

            $home->image = $imageName;

        }*/

        $home->save();

        return redirect('/')->with('msg', 'Imóvel Adicionado');
    }

    public function show($id){
        $home = Home::findOrFail($id);

        return view('homes.show', ['home' => $home]);

    }   

    public function destroy($id){
        Home::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Imovel Deletado!!');
    }

    public function edit($id){
        $home = Home::findOrFail($id);
        return view('homes.edit', ['home' => $home]);
    }

    public function update(Request $request){

        Home::findOrFail($request->id)->update($request->all());
        return redirect('/')->with('msg', 'Imovel Atualizado!!');
    }
}