<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BudgetController extends Controller
{
    public function all(){
            $user=Auth::user();



            $test= User::with("budgets")->get();


dd($test);

            return view("Budget.list");




    }
}
