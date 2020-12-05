<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;
use App\Universite;

use App\Http\Controllers\Controller;

use App\Http\Requests\RequestUniversite;
class UniversiteController extends Controller
{
    public function index(){
    	$universite = Universite::all();
    	return view('admin.universite.index',compact('universite'));
    }
    public function create(){
    	return view('admin.universite.add');
    }

    protected function store(RequestUniversite $request,Universite $universite){
       $user = Auth::user();
  
     $universite->create([
     	    'nom_universite'    => $request->nom_universite,
			'wilaya_universite' => $request->wilaya_universite,
            'id_user'           => $user->id,
       
        ]);
      session()->flash('success','Insertion est faite avec succée');

 return redirect('/admin/universite');
    }

 public function edit($id){
        $universite = Universite::find($id);
        return view('admin.universite.edit',compact('universite'));
    }

 public function update($id,RequestUniversite $request){
        $universite = Universite::find($id);
        $universite->nom_universite  = $request->input('nom_universite');
        $universite->wilaya_universite = $request->input('wilaya_universite');
        

        $universite->save();
       // $filiers->fill($request->all())->save();

	     session()->flash('success','la modification est faite avec succée');

 return redirect('/admin/universite');
       //return redirect('/admin/produit')->withFlashMessage('Le membre est modifier avec succée');
    }

    public function destroy($id){
   
        $universite = Universite::find($id); // recupere les donnees de la bdd qui a une id=$id
        $universite->delete();
       session()->flash('success','la supression est faite avec succée');

 return redirect('/admin/universite');
    }


    public function show($id){
      $universite = Universite::find($id);
        
      return view('admin.universite.show',compact('universite'));
    
    }
    public function getuniversite(RequestUniversite $request){
       $universite = $request->input('nom_universite');
       dd($universite);
    }

}
