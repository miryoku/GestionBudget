<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BudgetController extends Controller
{
    public function all(){
        if(Auth::check()){
            $user=Auth::user();

            return $user;
        }else{
            return "non";
        }



    }
}
