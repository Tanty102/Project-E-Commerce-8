<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session as FacadesSession;

class LangugeController extends Controller
{
    public function setLang($locale)
    {
        App::setLocale($locale);
        FacadesSession::put("locale", $locale);
        return redirect()->back();
    }
}