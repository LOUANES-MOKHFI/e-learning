<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Redirect;
use App\Faculte;
use App\Universite;
use App\Http\Controllers\Controller;

use App\Http\Requests\RequestFaculte;

class FaculteController extends Controller
{

    public function index($id){
    $faculte = Faculte::where('id_universite',$id)->get();
     $universite = Universite::find($id);
      return view('admin.facultes.index',compact('faculte','universite'));
   }
    public function create($id){
 		$universite = Universite::find($id);
    return view('admin.facultes.add',compact('universite'));
    }

    public function store(RequestFaculte $request,Faculte $faculte){

     $faculte->create([
        'nom_faculte'    => $request->nom_faculte,
        'universite_faculte' => $request->universite_faculte,
        'id_universite'           => $request->id,
     ]);

 session()->flash('success','Insertion est faite avec succée');

 return redirect('/admin/universite/facultes/'.$request->id.'/index');
   
    }
	public function edit($id){

    $faculte = Faculte::where('id',$id)->first();
     return view('admin.facultes.edit',compact('faculte'));
	}
	public function update($id,RequestFaculte $request){

      $faculte = Faculte::where('faculte.id',$id)->first();

     $faculte->nom_faculte = $request->input('nom_faculte'); 
     $faculte->universite_faculte = $request->input('universite_faculte'); 
     $faculte->id_universite = $request->input('id');
     $faculte->save();

     //$module->fill($request->all())->save();

      session()->flash('success','la modification est faite avec succée');

 return redirect('/admin/universite/facultes/'.$faculte->id_universite.'/index');

	}	


	public function destroy($id){
      $faculte = Faculte::where('faculte.id',$id)->first();
      
       $faculte->delete();
       session()->flash('success','la supression est faite avec succée');
 
 return redirect('/admin/universite/facultes/'.$faculte->id_universite.'/index');

	}

	public function show($id){
    $faculte = Faculte::where('faculte.id',$id)->get();
   
     return view('admin.facultes.show',compact('faculte'));
   
	}

public function show_all_facultes(){
  $faculte = Faculte::select('*')->get();
  return view('admin.facultes.show_all',compact('faculte'));
}

}
