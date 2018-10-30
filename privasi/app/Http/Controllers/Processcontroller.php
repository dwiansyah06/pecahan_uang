<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;

class Processcontroller extends Controller
{
    public function pemecahanUang()
    {
        $uang = Input::get('uang');
        return Redirect::to('/')->with('data',$uang);
    }

}
