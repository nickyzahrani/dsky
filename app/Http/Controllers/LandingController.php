<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing(){
        return view("pages.landing.landing");
    }
    public function tentangkami(){
        return view("pages.landing.tentangkami");
    }
    public function fasilitas(){
        return view("pages.landing.fasilitas");
    }
    public function harga(){
        return view("pages.landing.harga");
    }
    public function katalog(){
        return view("pages.landing.katalog");
    }
}
