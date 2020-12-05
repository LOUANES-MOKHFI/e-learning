<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Examens;
use App\Module;

use App\Http\Requests;
use App\Http\Controllers\Redirect;

use App\Http\Controllers\Controller;

use App\Http\Requests\RequestExamens;

use Illuminate\Http\UploadedFile;


class ExamensController extends Controller
{
  public function index($id){
		$examens = Examens::where('examens.id_module',$id)->get();
    	$module = Module::where('module.id_module',$id)->first();

        return view('admin.facultes.filiers.module.examens.index',compact('examens','module'));
  }  
  public function create(){
  	
  }  
  public function store(Examens $examens,RequestExamens $request){
  	    $examens->examen = $request->input('examen');
        $examens->domaine = $request->input('domaine');
        if(empty($request->examen))
        { 
   		   session()->flash('error','ajouter une examens svp!!');
    	   return redirect('/admin/facultes/filiers/module/examens/'.$request->id_module.'/index');
        }
        else{
        	if(empty($request->annee_examen)){
        		$examens->annee_examen = '/';
        	}else{
        		$examens->annee_examen = $request->input('annee_examen');
        	}
          if($request->hasFile('examen') &&  $request->hasFile('correction'))
        {
           $td->examen = $request->file('examen');
      $new_name = rand(). '.' .  $td->examen->getClientOriginalExtension();
        $td->examen->move('examen/',$new_name);
        $td->examen = $new_name;
       // $books->livre_pdf = $request->livre_pdf->store('livre');
        $td->correction = $request->file('correction');
      $new_name = rand(). '.' .  $td->correction->getClientOriginalExtension();
        $td->correction->move('examen/',$new_name);
        $td->correction = $new_name;
        }
        $examens->id_module = $request->input('id_module');
        $examens->save();
       
   		session()->flash('success','Insertion est faite avec succée');
    	return redirect('/admin/facultes/filiers/module/examens/'.$request->id_module.'/index');
        }   
  }  
  public function edit(){
  	
  }  
  public function update(){
  	
  }  
  public function destroy($id){
  	$examens = Examens::where('id_examen',$id);
	    $examenss = Examens::where('id_examen',$id)->first();

      //$module = Module::find($id); // recupere les donnees de la bdd qui a une id=$id
   //   dd($cours->id_module);

      $examens->delete();
       session()->flash('success','la supression est faite avec succée');

 return redirect('/admin/facultes/filiers/module/examens/'.$examenss->id_module.'/index');
  	
  }  
  public function show(){
  	
  }  
  
   public function show_examens($id,Examens $examens){
      $examens = $examens->where('examens.id_module',$id)->get();
      $examens1 = Examens::where('examens.id_module',$id)->first();

      if($examens1 == null ){
          return view('admin.errors.examens_403');
      }else{
         return view('client.filiers.module.view_examens',compact('examens','examens1'));
         }
    
      
     }
}
