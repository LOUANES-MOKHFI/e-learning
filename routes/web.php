<?php



Route::group(['middleware' => ['web' , 'admin']], function(){
	/* main admin route */
  Route::get('/admin', 'Admincontroller@index')->middleware('admin');
 Route::get('/admin/profil', 'UsersController@profil');

  /* users */
  //Route::get('/admin/users', 'UsersController@index');
  Route::resource('/admin/users', 'UsersController');
  Route::get('/admin/users/{id}/delete', 'UsersController@destroy');

 /* setting */

  Route::get('/admin/sitesetting', 'SiteSettingController@index');
  Route::post('/admin/sitesetting', 'SiteSettingController@store');
  Route::post('/admin/sitesetting/{id}', 'SiteSettingController@update');
/* Universite */
  Route::resource('/admin/universite', 'UniversiteController');
  Route::get('/admin/universite/{id}/delete', 'UniversiteController@destroy'); 
  Route::post('/search','UniversiteController@getuniversite');
/* Faculte */
    Route::get('/admin/universite/facultes/{id}/index','FaculteController@index');
    Route::get('/admin/universite/facultes/{id}/create','FaculteController@create');
    Route::post('/admin/universite/facultes','FaculteController@store');
    Route::get('/admin/universite/facultes/{id}/edit','FaculteController@edit');
    Route::get('/admin/universite/facultes/{id}','FaculteController@show');
    Route::put('/admin/universite/facultes/{id}','FaculteController@update');
    Route::get('/admin/universite/facultes/{id}/delete','FaculteController@destroy');
     Route::get('/All_facultes','FaculteController@show_all_facultes');

/*  filier  */
    Route::get('/admin/facultes/filiers/{id}/index','ControllerFiliers@index');
    Route::get('/admin/facultes/filiers/{id}/create','ControllerFiliers@create');
    Route::post('/admin/facultes/filiers','ControllerFiliers@store');
    Route::get('/admin/facultes/filiers/{id}/edit','ControllerFiliers@edit');
    Route::get('/admin/facultes/filiers/{id}','ControllerFiliers@show');
    Route::put('/admin/facultes/filiers/{id}','ControllerFiliers@update');
    Route::get('/admin/facultes/filiers/{id}/delete','ControllerFiliers@destroy');
     Route::get('/All_filiers','ControllerFiliers@show_all_spec');


  /* module  */

  //Route::resource('/admin/facultes/filiers/module','ModuleController');

    Route::get('/admin/facultes/filiers/module/{id}/index','ModuleController@index');
    Route::get('/admin/facultes/filiers/module/{id}/create','ModuleController@create');
    Route::post('/admin/facultes/filiers/module','ModuleController@store');
    Route::get('/admin/facultes/filiers/module/{id}/edit','ModuleController@edit');
    Route::get('/admin/facultes/filiers/module/{id}','ModuleController@show');
    Route::put('/admin/facultes/filiers/module/{id}','ModuleController@update');
    Route::get('/admin/facultes/filiers/module/{id}/delete','ModuleController@destroy');

    /* Cours   */
    Route::get('/admin/facultes/filiers/module/cours/{id}/index','CoursController@index');
    Route::post('/admin/facultes/filiers/module/cours','CoursController@store');
    Route::get('/admin/facultes/filiers/module/cours/{id}/delete','CoursController@destroy');
    Route::get('/admin/facultes/filiers/module/cours/{id}','CoursController@show');


    /* Tds Route  */
    Route::get('/admin/facultes/filiers/module/tds/{id}/index','TdsController@index');
    Route::post('/admin/facultes/filiers/module/td','TdsController@store');
    Route::get('/admin/facultes/filiers/module/tds/{id}/delete','TdsController@destroy');
   
    /* Examens  */
    Route::get('/admin/facultes/filiers/module/examens/{id}/index','ExamensController@index');
    Route::post('/admin/facultes/filiers/module/examens','ExamensController@store');
    Route::get('/admin/facultes/filiers/module/examens/{id}/delete','ExamensController@destroy');

    /* Contact */
    Route::get('/admin/contact','ContactsController@index');
    Route::get('/admin/contact/{id}','ContactsController@show');
   // Route::get('/admin/contact/{id}','ContactsController@update');
    Route::get('/admin/contact/{id}/delete','ContactsController@destroy');

Route::get('/showfiliers1','ControllerFiliers@show_filiers');



});

Route::group(['middleware' => 'web'], function(){
Route::auth();
Route::get('/', function () {
    return view('welcome');
});
/* route client */
Route::get('/showfiliers','ControllerFiliers@showall')->middleware('auth');
Route::get('/client/filiers/showfilier/{id}','ControllerFiliers@show_c');
Route::get('/showfiliers1','ControllerFiliers@show_filiers');
Route::get('/client/filiers/showallmodule/{id}','ModuleController@showallmodule');
Route::get('/client/filiers/showallmodule_smstre/{id}','ModuleController@showallmodule_smstre');

Route::get('/client/filiers/showmodule/{id}','ModuleController@showmodule');
 /* route cours*/
Route::get('/client/filiers/module/{id}/view_cours','CoursController@show_cours');
/* route td*/
Route::get('/client/filiers/module/{id}/view_tds','TdsController@show_tds');

/* route examens*/
Route::get('/client/filiers/module/{id}/view_examens','ExamensController@show_examens');

Route::get('/client/profil', 'UsersController@profil');
Route::get('/client/modifier_profil', 'UsersController@edit_p');
Route::put('/client/modifier_profil/{id}', 'UsersController@update_profil');

Route::get('/showfiliers/{faculte}','ControllerFiliers@getfilier');

Route::get('/contact', 'HomeController@contacts');
Route::post('/contact','ContactsController@store');
Route::get('/searche','ModuleController@search');
//Route::get('/getcustomer/{str}','ModuleController@getdocument');
Route::get('/home', 'HomeController@index');



Route::get('/ajax-faculte',function(){
$id_faculte = $_GET['id'];
  //dd($id_faculte);
  $filiers = \App\Filiers::where('id_faculte','=',$id_faculte)->get();
 // return view('client.filiers.showfiliers',compact('filiers'));
 // return Response::json($filiers);
  return Response::json($filiers);
});
Route::get('/ajax-niveau',function(){
$id_filiers = $_GET['id'];
  //dd($id_faculte);
  $niveau = \App\Filiers::where('id','=',$id_filiers)->get();
 // return view('client.filiers.showfiliers',compact('filiers'));
 // return Response::json($filiers);
  return Response::json($niveau);
});

Route::get('/ajax-universite',function(){
$id_universite = $_GET['id'];
  //dd($id_faculte);
  $faculte = \App\Faculte::where('id_universite','=',$id_universite)->get();
 // return view('client.filiers.showfiliers',compact('filiers'));
 // return Response::json($filiers);
  return Response::json($faculte);
});

});




