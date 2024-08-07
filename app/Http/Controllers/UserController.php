<?php

namespace App\Http\Controllers;

use App\Models\Cocktail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function Show()
    {
        $cocktails = Cocktail::find()->cocktails;

        foreach ($cocktails as $cocktail) {
            return dd($cocktail);
        }
    }

    public function store(Request $request)
    {
        //
    }
}
