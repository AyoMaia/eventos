<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function contact()
    {
        $users = User::all();

        return view('contact', compact('users'));
    }


}


