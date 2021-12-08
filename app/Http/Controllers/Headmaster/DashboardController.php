<?php

namespace App\Http\Controllers\Headmaster;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class DashboardController extends Controller
{
    /**
     * Display a landing page .
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Session::get('users');

        return view('pages.headmaster.dashboard')->with($user);  
    }
}
