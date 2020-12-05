<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Produit;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddUserRequestAdmin;

class UsersController extends Controller
{
 	public function index(User $user){
        $user = User::where('active',1)->get();
    	return view('admin.user.index',compact('user'));
    }

    public function create(){
    	return view('admin.user.add');
    }

    protected function store(AddUserRequestAdmin $request,User $user){

     $user->create([
            'name'  => $request->name,
            'email' => $request->email,
            'admin' => $request->admin,
            'password' => bcrypt($request->password),
            'active' => 1,
        ]);
      session()->flash('success','Le membre est ajouter avec succée');

 return redirect('/admin/users');
        
        //return redirect('/admin/users')->withFlashMessage('Le membre est ajouter avec succée');
    }

     public function edit(User $user){
         
          return view('admin.user.edit',compact('user'));
      
    }


     public function update($id,Request $request){

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->admin = $request->input('admin');
        $user->password = bcrypt($request->input('password'));

        $user->save();
          
         session()->flash('success','Le membre est modifier avec succée');

 return redirect('/admin/users');
       //return redirect('/admin/produit')->withFlashMessage('Le membre est modifier avec succée');
    }

 public function destroy($id){
    if($id != 1){
        //$user = User::find($id); // recupere les donnees de la bdd qui a une id=$id
       // $user->delete();
          $user = User::find($id);
          $user->active = 0;
          $user->save();
        
         session()->flash('success','Le membre est supprimer avec succée');

 return redirect('/admin/users');
    }else{
         session()->flash('warning','vous ne peuvent pas supprimer ce membre');

 return redirect('/admin/users');
      //  return redirect('/admin/users')->withFlashMessage('');
    }}

 public function show(User $user){
       return view('admin.user.show',compact('user'));
    }

     public function profil(User $user){

       $user = Auth::user();
       if($user->admin == 1){
               return view('admin.profil',compact('user'));

       }else{
               return view('client.profil',compact('user'));
       }
    }

 public function edit_p(User $user){
      $user = Auth::user(); 
        return view('client.modifier_profil',compact('user'));
    }
    public function update_profil($id,Request $request){
         $user = User::find($id);
          $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

         session()->flash('success','La modification est faite avec succée');

 return redirect('/client/profil');
    }

    

}
?>