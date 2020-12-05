<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
use App\Http\Requests\RequestContacts;
use App\Http\Requests;

class ContactsController extends Controller
{   
     public function index(){
     	$contact = Contacts::all();
     	return view('admin.contact.index',compact('contact'));
     }

     public function store(Contacts $contacts,RequestContacts $request){

     $contacts->create(
     	[
     	    'name'       => $request->name,       
     	    'specialite' => $request->specialite,
     	    'objet'      => $request->objet,
     	    'message'    => $request->message,
     	    'view'       => 0,
        ]);
     
      session()->flash('success','Votre message à étè envoyer avec succeé');

      return redirect('/contact');

   }

 public function destroy($id){
   
        $contact = Contacts::find($id); // recupere les donnees de la bdd qui a une id=$id
        $contact->delete();
       session()->flash('success','la supression est faite avec succée');

 return redirect('/admin/contact');
    }

  public function show($id,Contacts $contact){
      $contact = $contact->find($id);
        
      if($contact){
      	 $contact->view = 1;
        $contact->save();
        return view('admin.contact.show',compact('contact'));
      }
    }

  
}
