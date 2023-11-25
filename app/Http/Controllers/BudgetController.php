<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BudgetController extends Controller
{
    public function all(){
            $user=Auth::user()::with("budgets")->get();



            $test= User::with("budgets")->get();


dd($user->toArray());

            return view("Budget.list");




    }
}
