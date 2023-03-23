<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request): array
    {
        $input = $request->input();
        $query = $request->query();
        $post  = $request->post();

        return ["input" => $input, "query" => $query, "post" => $post];
    }
}
