<?php

namespace App\Http\Controllers;

use App\Models\Approved_m;
use Illuminate\Http\Request;

class mainpageController extends Controller
{
    public function index(Request $req){
        $materials = Approved_m::latest()->paginate(2);

        if($req->ajax()){
            $materials = Approved_m::where('id', '<', $req->id)->latest()->paginate(2);
            $view = view('components.data', compact('materials'));
            return $view;
        }
        return view('mainPage', compact('materials'));
    }
}
