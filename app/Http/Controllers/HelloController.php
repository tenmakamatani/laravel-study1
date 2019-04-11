<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function get() {
        return view('hello.index', [
            "isName" => false
        ]);
    }

    public function post(Request $req) {
        return view('hello.index', [
            'isName' => true,
            "name" => $req->name."さん、ようこそ"
        ]);
    }
}
