<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //Praktikum2 (3-4)
    public function articles($id){
        return "Halaman artikel dengan ID {$id}" ;
    }
}