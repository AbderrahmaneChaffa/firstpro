<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(Request $request) {
        //return 'salam hts';
        //dump($nom);
        $nom = 'abderrahmane';
        $prenom = 'chaffa';
        //$langages = [];
        $langages = ['PHP', 'javascript', 'Java'];
        return view('home', compact('nom', 'langages','prenom'));
        
    }
}
