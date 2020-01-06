<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $partners = Partner::all();

        return view('pages.index', compact('partners'));
    }

    public function getQuiz(Partner $partner)
    {
        return view('pages.quiz', compact('partner'));
    }
}
