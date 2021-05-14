<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function home()
    {
        return view('welcome', [
            'profile' => Profile::first()
        ]);
    }
}
