<?php

namespace App\Http\Controllers;

use App\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
	    $this->middleware('signed')->only('verify');
	    $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$user = \Auth::user();

    	$ads = DB::table('ads')->where('user_id', $user->id)->get();

	    return view('pages.dashboard')
	        ->withUser( $user )
	        ->withAds( $ads );
    }
}
