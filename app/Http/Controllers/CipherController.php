<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CipherModel;

class CipherController extends Controller
{
    public function index()
    {
        return view('cipher');
    }

    public function process(Request $request)
    {
        $cipher = new CipherModel();

        $text = $request->text;
        $shift = $request->shift;
        $action = $request->action;

        if ($action == "encrypt") {
            $result = $cipher->encrypt($text, $shift);
        } else {
            $result = $cipher->decrypt($text, $shift);
        }

        return view('cipher', compact('result'));
    }
}
