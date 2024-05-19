<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function create(): string
    {
        return view('session-create');
    }
    public function read(): string
    {
        return view('session-read');
    }
    public function destroy(): string
    {
        return view('session-destroy');
    }
}
