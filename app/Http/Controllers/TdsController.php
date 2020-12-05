<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Tds;
use App\Module;

use App\Http\Requests;
use App\Http\Controllers\Redirect;

use App\Http\Controllers\Controller;

use App\Http\Requests\RequestTds;

use Illuminate\Http\UploadedFile;

class TdsController extends Controller
{
   public function index($id)
    {   
    	$td = Tds::where('tds.id_module',$id)->get();
    	$module = Module::where('module.id_module',$id)->first();

        return view('admin.facultes.filiers.module.tds.index',compact('td','module'));
    }

	public function store(Tds $td,RequestTds $request)
	{
		    $td->serie = $request->input('serie');
        $td->domaine = $request->input('domaine');


        if(empty($request->serie))
        { 
   		   session()->flash('error','ajouter une serie svp!!');
    	   return redirect('/admin/facultes/filiers/module/tds/'.$request->id_module.'/index');
        }
        else{
           if($request->hasFile('serie'))
        {
           $td->serie = $request->file('serie');
      $new_name = rand(). '.' .  $td->serie->getClientOriginalExtension();
        $td->serie->move('Tds/',$new_name);
        $td->serie = $new_name;
       // $books->livre_pdf = $request->livre_pdf->store('livre');
        }

        $td->id_module = $request->input('id_module');
        $td->save();
       
   		session()->flash('success','Insertion est faite avec succée');
    	return redirect('/admin/facultes/filiers/module/tds/'.$request->id_module.'/index');
        }   
        
    }

    
    public function create()
    {

    }

   
    public function edit()
    {

    }
    public function update()
    {

    }
    public function destroy($id)
    {
    	$td = Tds::where('id_td',$id);
	    $tdd = Tds::where('id_td',$id)->first();

      //$module = Module::find($id); // recupere les donnees de la bdd qui a une id=$id
   //   dd($cours->id_module);

      $td->delete();
       session()->flash('success','la supression est faite avec succée');

 return redirect('/admin/facultes/filiers/module/tds/'.$tdd->id_module.'/index');
	
      
    }

    public function show($id,Cours $cours)
    {

      
    }

    public function show_tds($id,Tds $td){
      $td = $td->where('tds.id_module',$id)->get();
      //dd($cours);
      $td1 = Tds::where('tds.id_module',$id)->first();
 if($td1 == null ){
          return view('admin.errors.td_403');
      }else{
      return view('client.filiers.module.view_tds',compact('td','td1'));
      } 
    }


}