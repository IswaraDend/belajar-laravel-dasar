<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InputController extends Controller
{
    public function hello(Request $request) : string {
        $name = $request->input('name');
        return "Hello $name";
    }

    public function helloFirstName(Request $request) : string {
        $firstName = $request->input('first.name');
        return "Hello $firstName";
    }

    public function helloInput(Request $request) : string {
        $input = $request->input();
        return json_encode($input);
    }
}
