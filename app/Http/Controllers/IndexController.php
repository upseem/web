<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request,$id = 0): array
    {
        $input = $request->input();
        $query = $request->query();
        $post  = $request->post();

        return ["input" => $input, "query" => $query, "post" => $post,"id"=>$id];
    }
}
