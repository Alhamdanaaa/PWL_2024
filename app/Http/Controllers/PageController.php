<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'Alhamdana Fariz Al Furqaan | 2241720115';
    }
    public function articles($id){
        return 'Halaman Artikel dengan Id'.$id;
    }
}
