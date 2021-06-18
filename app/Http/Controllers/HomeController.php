<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function changeLanguage(Request $request, $language)
    {
        if (isset($language)) {
            $request->session()->put('web-language', $language);
        }

        return redirect()->back();
    }
}
