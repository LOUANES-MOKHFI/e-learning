<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Cours;
use App\Module;

use App\Http\Requests;
use App\Http\Controllers\Redirect;

use App\Http\Controllers\Controller;

use App\Http\Requests\RequestCours;
use App\Http\Requests\RequestFiliers;


use Illuminate\Http\UploadedFile;

class CoursController extends Controller
{

	public function index($id)
    {   
    	$cours = Cours::where('cours.id_module',$id)->get();
    	$module = Module::where('module.id_module',$id)->first();

        return view('admin.facultes.filiers.module.cours.index',compact('cours','module'));
    }

	 public function store(Cours $cours,RequestCours $request)
	 {   
        $cours->cours = $request->input('cours');
        $cours->domaine = $request->input('domaine');
        if(empty($request->cours))
        { 
   		   session()->flash('error','ajouter un fichier svp!!');
    	   return redirect('/admin/facultes/filiers/module/cours/'.$request->id_module.'/index');
        }
        else{
           if($request->hasFile('cours'))
        {
           $cours->cours = $request->file('cours');
      $new_name = rand(). '.' .  $cours->cours->getClientOriginalExtension();
        $cours->cours->move('cours/',$new_name);
        $cours->cours = $new_name;
       // $books->livre_pdf = $request->livre_pdf->store('livre');
        }

        $cours->id_module = $request->input('id_module');
        $cours->save();
       
   		session()->flash('success','Insertion est faite avec succée');
    	return redirect('/admin/facultes/filiers/module/cours/'.$request->id_module.'/index');
        }   
    }

    
    public function create(){

    }

   
    public function edit(){

    }
    public function update(){

    }
    public function destroy($id){
		$cours = Cours::where('id_cours',$id);
	    $coursd = Cours::where('id_cours',$id)->first();

      //$module = Module::find($id); // recupere les donnees de la bdd qui a une id=$id
   //   dd($cours->id_module);

      $cours->delete();
       session()->flash('success','la supression est faite avec succée');

 return redirect('/admin/facultes/filiers/module/cours/'.$coursd->id_module.'/index');
    }

    public function show($id,Cours $cours){

       $cours = Cours::where('cours.id_cours',$id)->first();
       return view('admin.facultes.filiers.module.cours.show',compact('cours'));
    }

    public function show_cours($id,Cours $cours){
      $cours = $cours->where('cours.id_module',$id)->get();
      //dd($cours);
      $cours1 = Cours::where('cours.id_module',$id)->first();
 if($cours1 == null ){
          return view('admin.errors.cours_403');
      }else{
      return view('client.filiers.module.view_cours',compact('cours','cours1'));
        }
        }

}
