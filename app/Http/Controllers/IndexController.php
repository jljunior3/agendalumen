<?php

namespace AgendaLumen\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return view('agenda');
    }
}
