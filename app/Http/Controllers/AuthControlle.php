<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;

class AuthControlle extends Controller
{
    //

    public function signup(Request $request)
    {
        // echo 'hello world ';
        $data = new Auth();
        $data->name = $request->input('name');
        $data->age = $request->input('age');
        $data->phone = $request->input('phone');
        $data->location = $request->input('location');
        $data->save();
        return $data;
    }
}
