<?php

namespace App\Http\Controllers;

use App\Models\FinanceInstitute;
use Illuminate\Http\Request;

class Investment extends Controller
{
    public function index(){
        return view('investment/index');
    }

    public function create(){


        $institutes = FinanceInstitute::select('id','institute_name')->get();

//        dd($institutes);
        $institutesArray = [];

        foreach($institutes as $institute){
            $institutesArray[$institute->id] = $institute->institute_name;
        }


        return view('investment/create', compact('institutesArray'));
    }
}
