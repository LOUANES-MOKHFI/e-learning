<?php
function getSetting(){
     return \App\SiteSetting::where('id', 1)->first();
  }

function user(){
     return \App\User::select('*')->get();
  }


   function universite(){
      return \App\Universite::select('*')->get();
  }
  
  function faculte(){
      return \App\Faculte::select('*')->get();

  }
     
     function spec(){
      return \App\Filiers::select('*')->get();

  }
   function filier_choisi(){
         return \App\Filiers::where('faculte_nom','Faculte des sciences')->get();
  }
  
  function module($id){
    return \App\Module::where('id_module',$id)->first();
  }
  function nbr_module($id){
    return \App\Module::where('id',$id)->get();
  }
  

  function unreadMessage(){
    return \App\Contacts::where('view' , 0)->get();
  }

  function countunreadMessage(){
    return \App\Contacts::where('view' , 0)->count();
  }
   function allmessage(){
    return\App\Contacts::Select('*')->get();
   }
   
  function notification(){
    return \App\User::where('id','max(id)')->get();
  }


?>


