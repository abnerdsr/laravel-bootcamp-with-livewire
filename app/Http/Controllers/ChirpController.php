<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Response;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index(): View
    {
        return view('chirps', [
            //
        ]);
    }
}
