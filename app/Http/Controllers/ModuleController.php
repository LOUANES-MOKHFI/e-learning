<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\database;
use Illuminate\Support\Facades\DB;
use App\Filiers;
use App\Module;
use App\Cours;
use App\Tds;
use App\Examens;
use App\Http\Requests;
use App\Http\Controllers\Redirect;

use App\Http\Controllers\Controller;

use App\Http\Requests\RequestModule;
use App\Http\Requests\RequestCours;
class ModuleController extends Controller
{
    public function index($id){
    $module = Module::where('module.id',$id)->get();
     $filiers = Filiers::find($id);

      return view('admin.facultes.filiers.module.index',compact('module','filiers'));
   }
    public function create($id){
 $filiers = Filiers::find($id);
    return view('admin.facultes.filiers.module.add',compact('filiers'));
    }

    public function store(RequestModule $request,Module $module){

     $module->create([
        'nom_module'   => $request->nom_module,
        'filier'   	   => $request->filier,
        'num_semstr'   => $request->num_semstr,
        'coeff'		     => $request->coeff,
        'id'           => $request->id,
     ]);

 session()->flash('success','Insertion est faite avec succée');

 return redirect('/admin/facultes/filiers/module/'.$request->id.'/index');
   
    }
	public function edit($id){

    $module = Module::where('module.id_module',$id)->first();
     return view('admin.facultes.filiers.module.edit',compact('module'));
	}
	public function update($id,RequestModule $request){

      $module = Module::where('module.id_module',$id)->first();

     // dd($module);
     $module->nom_module = $request->input('nom_module'); 
     $module->filier = $request->input('filier'); 
     $module->num_semstr = $request->input('num_semstr'); 
     $module->coeff = $request->input('coeff'); 
     $module->id = $request->input('id');
     //dd($request->input('num_semstr'), $module->num_semstr,$request->input('nom_module'),$module->nom_module,$request->input('filier') ,$module->filier,$request->input('coeff'),$module->coeff, $request->input('id'));
    //dd($module);
  $module->save();

     //$module->fill($request->all())->save();

      session()->flash('success','la modification est faite avec succée');

 return redirect('/admin/facultes/filiers/module/'.$request->id.'/index');

	}	


	public function destroy($id){
		$module = Module::where('id_module',$id);
      //$module = Module::find($id); // recupere les donnees de la bdd qui a une id=$id
  // dd($module);
      $module->delete();
       session()->flash('success','la supression est faite avec succée');

 return redirect('/admin/facultes/filiers');

	}

	public function show($id,Module $module){
    $module = Module::where('module.id_module',$id)->get();
   
     return view('admin.facultes.filiers.module.show',compact('module'));
   
	}
  public function showallmodule(Module $module,$id){
      $module = Module::where('module.id',$id)->get();
      $spec = Filiers::where('id',$id)->first();
    
      return view('client.filiers.showallmodule',compact('module','spec'));
   }

  public function showmodule(Module $module,$id){
    
      $module = Module::where('module.id_module',$id)->first();
      return view('client.filiers.showmodule',compact('module'));
   }
  public function showallmodule_smstre($id){
        if(isset($_GET['submit'])){
            $spec = Filiers::where('id',$id)->first();
            $module = Module::where('module.num_semstr',$_GET['num_semstr'])
            ->where('id',$id)->get();
        return view('client.filiers.showallmodule',compact('module','spec'));
        }   
}
   public function search() {
    if (isset($_GET['submit'])) {
       $text = $_GET['search'];
   //dd($text);
      //$doc = DB::select('select cours,serie,examen from cours,tds,examens where domaine = :domaine',['domaine'=>$text]);
       //$document = (DB::select('select cours from cours where domaine = :domaine ' ,['domaine'=>$text]));
     $cours = Cours::where('domaine', 'Like', $text)->limit(10)->get();
      /*$document = DB::table('cours')
->select('users.id','users.name','profiles.photo')
->join('profiles','profiles.id','=','users.id')
->where(['something' => 'something', 'otherThing' => 'otherThing'])
->get();*/
  $tds = Tds::where('domaine', 'Like', $text)->limit(10)->get();
  $examens = Examens::where('domaine', 'Like', $text)->limit(10)->get();
    //$doc = Array($cours,$tds,$examens);
   // dd($doc);
//    dd($document->id_module);
    // return the results
    $correction_e = Examens::where('domaine', 'Like', $text)->limit(10)->get();
  $correction_t = Tds::where('domaine', 'Like', $text)->limit(10)->get();

    return view('client.all_document',compact('cours','tds','examens','correction_e','correction_t'));
    }
}

public function search1(){
if (isset($_GET['submit'])) {
       $text = $_GET['search'];
  $doc = DB::select("SELECT e.domaine,e.examen,c.cours,t.serie from examens e,cours c,tds t where e.domaine = 'informatique' and c.domaine = 'informatique' and t.domaine = 'informatique'
");
 // dd($doc);
    return view('client.all_document',compact('doc'));
}
}

public function getdocument(){
  $doc = $_GET['str'];
  $cours = Cours::where('domaine', 'Like', $doc)->get();
 // return view('client.all_document',compact('cour'));
}
}
