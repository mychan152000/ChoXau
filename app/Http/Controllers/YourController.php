<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourController extends Controller
{
    //
    public function redirect(Request $request) {
        $url = $request['url'];
        return view('holding-page', compact('url'));
    }
}
