<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function abid(){
        return view(view:'user');
    }

    public function show(){
        return 'practice can more perfect';
    }
}
