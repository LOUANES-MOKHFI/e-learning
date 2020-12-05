<?php

namespace App\Http\Controllers;
use App\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\UploadedFile;
class SiteSettingController extends Controller
{
   public function index(SiteSetting $sitesetting){
     $sitesetting = SiteSetting::find(1);
   	return view('admin.sitesetting.index',compact('sitesetting'));

   }

public function store(Request $request, SiteSetting $sitesetting){
  
        $sitesetting->site_name = $request->input('site_name');
        $sitesetting->slegon = $request->input('slegon');
        $sitesetting->Adress = $request->input('Adress');
        $sitesetting->facebook = $request->input('facebook');
        $sitesetting->twitter = $request->input('twitter');
		    $sitesetting->description = $request->input('description');
        $sitesetting->save();
          
         session()->flash('success','La modification à étè faite avec succée');

 return redirect('/admin/sitesetting');
}
  
public function update($id,Request $request){

        $sitesetting = SiteSetting::find($id);
        $sitesetting->site_name = $request->input('site_name');
        $sitesetting->slegon = $request->input('slegon');
        $sitesetting->Adress = $request->input('Adress');
        $sitesetting->facebook = $request->input('facebook');
        $sitesetting->twitter = $request->input('twitter');
	    	$sitesetting->description = $request->input('description');
        if($request->hasFile('image'))
       {
        $sitesetting->image = $request->file('image');
      $new_name = rand(). '.' .  $sitesetting->image->getClientOriginalExtension();
        $sitesetting->image->move('images/',$new_name);
         $sitesetting->image = $new_name;
   //$actualite->image = $request->image->store('image');
        }
		
        if($request->hasFile('image1'))
           {
            $sitesetting->photo_welcom = $request->image1->store('image'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image2'))
           {
            $sitesetting->photo_welcom1 = $request->image2->store('image'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image3'))
           {
            $sitesetting->photo_welcom2 = $request->image3->store('image'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
        $sitesetting->save();
          
          session()->flash('success','La modification à étè faite avec succée');

 return redirect('/admin/sitesetting');
       //return redirect('/admin/produit')->withFlashMessage('Le membre est modifier avec succée');
    }

}
