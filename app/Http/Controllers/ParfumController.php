<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parfum;
use App\Models\User;


class ParfumController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $parfums = Parfum::latest()->where('title', 'like', '%' . $keyword . '%')->paginate(8)->withQueryString();
        return view('parfums', [
            "active" => 'parfums',
            "parfums" => $parfums
        ]);
    }

    public function show(Parfum $parfum)
    {
        return view('parfum', [
            "parfum" => $parfum
        ]);
    }
}
