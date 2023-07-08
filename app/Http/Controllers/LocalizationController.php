<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function setLanguage($localeId) {
        App::setlocale($localeId);
        Session::put('locale', $localeId);
        return redirect()->back();
    }
}
