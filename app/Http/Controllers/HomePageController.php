<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function updateFile(Request $req) {
        $req->input('text');
        $f = fopen("files/text.txt", "w");
        fwrite($f, $req->input('text'));
        fclose($f);
        $str = $this->readFile();
        return view('home')->withData($str);
    }

    public function readFile() {
        $f = fopen("files/text.txt", "r");
        $str = fgets($f);
        fclose($f);
        return $str;
    }

    public function index() {
        return view('home');
    }
}
