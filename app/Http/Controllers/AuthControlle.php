<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class AuthControlle extends Controller
{
    //

    public function signup(Request $request)
    {
        // echo 'hello world ';
        $validate = FacadesValidator::make($request->all(), [
            'name' => 'required',
            'age' => 'required',
            "phone" => 'required|max:11|numeric|min:10',
            "email" => 'required|max:190|email',
            "password" => 'required|max:12|password',
            "location" => 'required'

        ]);
        // if ($validate->fails()) {
        //     // return response()->json([
        //     //     'error' => $validate->,
        //     // ]);
        //     return $validate ;
        // } else {

        $data = new Auth();
        $data->name = $request->input('name');
        $data->age = $request->input('age');
        $data->phone = $request->input('phone');
        $data->location = $request->input('location');
        $data->email = $request->input('email');
        $data->type = $request->input('type');
        $data->password = Hash::make($request->input('password'));
        // $data['password']=Hash::make();
        $data->save();
        return $data;
    }
    public function Allusers()
    {
        return   Auth::all();
    }
}
// }
