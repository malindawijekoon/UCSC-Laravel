<?php

namespace App\Http\Controllers;

use App\Models\FinanceInstitute;
use Illuminate\Http\Request;

class FixedDeposit extends Controller
{

    public function index()
    {
        return view('fixed_deposit/index');
    }

    public function create()
    {
        $institutes =FinanceInstitute::select('id','institute_name')->get();

        $institutesArray = [];

        foreach($institutes as $institute){
            $institutesArray[$institute->id] = $institute->institute_name;
        }
        return view('fixed_deposit/create', compact('institutesArray'));
    }
}
