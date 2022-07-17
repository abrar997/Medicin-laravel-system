<?php

namespace App\Http\Controllers\Categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categ;

class CategController extends Controller
{
    //

    public function Addcateg(Request $request)

    {
        $categ = new Categ();
        $categ->name = $request->input('name');
        $categ->comapny = $request->input('company');
        $categ->save();
        return $categ;
    }

    public function AllCateg()
    {
        $all = Categ::all();
        return $all;
    }
}
