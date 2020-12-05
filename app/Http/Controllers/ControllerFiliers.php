<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Filiers;
use App\Module;
use App\Faculte;

use App\Http\Requests;
use App\Http\Controllers\Redirect;

use App\Http\Controllers\Controller;

use App\Http\Requests\RequestFiliers;

class ControllerFiliers extends Controller
{
    public function index($id){
       $filiers = Filiers::where('id_faculte',$id)->get();
     $faculte = Faculte::find($id);
   //dd($filiers1);
    	return view('admin.facultes.filiers.index',compact('filiers','faculte'));
    }
    public function create($id){
    $faculte = Faculte::find($id);
    return view('admin.facultes.filiers.add',compact('faculte'));

    }
     protected function store(RequestFiliers $request,filiers $filiers){

     $filiers->create([
     	    'nom_filier'          => $request->nom_filier,
     	    'faculte_nom'         => $request->faculte_nom,
          'niveau'              => $request->niveau,
     	    'filier_discription'  => $request->filier_discription,
          'status'              => $request->status,
          'id_faculte'          => $request->id_faculte,
        ]);
      session()->flash('success','Insertion est faite avec succée');

 return redirect('/admin/facultes/filiers/'.$request->id_faculte.'/index');
    }
   
  public function edit($id,Filiers $filiers){
        $filiers = $filiers->find($id);
        return view('admin.facultes.filiers.edit',compact('filiers'));
    }


     public function update(RequestFiliers $request){
        $id = $request->id;
        $filiers = Filiers::where('id_faculte',$id)->first();
     // dd($filiers);
        $filiers->nom_filier = $request->input('nom_filier');
        $filiers->faculte_nom = $request->input('faculte_nom');
        $filiers->niveau = $request->input('niveau');
        $filiers->filier_discription = $request->input('filier_discription');
        $filiers->status = $request->input('status');
        $filiers->id_faculte = $request->id;
        $filiers->save();
     // $filiers->fill($request->all())->save();
//dd($filiers->nom_filier);
	     session()->flash('success','la modification est faite avec succée');

 return redirect('/admin/facultes/filiers/'.$filiers->id_faculte.'/index');
       //return redirect('/admin/produit')->withFlashMessage('Le membre est modifier avec succée');
    }

 public function destroy($id){
   
        $filiers = Filiers::find($id); // recupere les donnees de la bdd qui a une id=$id
        $filiers->delete();
       session()->flash('success','la supression est faite avec succée');

 return redirect('/admin/facultes/filiers');
    }

public function show($id,Filiers $filiers){
      $filiers = $filiers->find($id);
      $faculte = Faculte::where('id',$id)->first();
      return view('admin.facultes.filiers.show',compact('filiers','faculte'));
    }
public function showall(){
  $filiers1 = Filiers::where('status',1)->orderBy('id','desc')->limit(10)->get();
     return view('client.filiers.showfiliers',compact('filiers1'));
}

public function show_filiers(){

  if (isset($_GET['submit'])) {
    $filiers = $_GET['nom_filier'];
    //dd($filiers);
    $faculte = $_GET['faculte_nom'];
    $niveau = $_GET['niveau'];
    $filiers1 = Filiers::where('id',$filiers)
    ->where('id_faculte',$faculte)
    ->where('niveau', $niveau)->first();
    return view('client.filiers.filiers',compact('filiers1'));

    }

    // return view('client.filiers.showfiliers',compact('filiers1'));
}
public function show_c($id,Filiers $filiers){
      $filiers1 = $filiers->find($id);
        
      return view('client.filiers.showfiliers_1',compact('filiers1'));
    
    }



public function view(){
  return view('searche_spec');
}

public function show_all_spec(){
  $filiers = Filiers::select('*')->get();
  return view('admin.facultes.filiers.show_all',compact('filiers'));
}


}
