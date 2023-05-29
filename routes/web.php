<?php

use App\Http\Controllers\homeController;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
GET     :Lecture
POST    :Ajouter
PUT     :Modification Complete
PATCH   :Modification partielle
DELETE  :Supprimer

CONNECT
OBTIONS

*/

Route::get('/', [homeController::class,'index']);


/*Route::get('/{nom}/{prenom}', function (Illuminate\Http\Request $request) {
    //dd($request);
    return view('welcome',[
        'nom'=> $request->nom,
        'prenom'=> $request->prenom
        /*'prenom' => "abderrahmane",
        'cours' =>  ['PHP', 'HTML','LARAVEL', 'CSS']
    ]);
});*/
