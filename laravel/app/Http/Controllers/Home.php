<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class Home extends Controller
{
    /**
     * Show the home page
     *
     * @return Response
     */
    public function homepage()
    {
        return view( 'welcome' );
    }
}