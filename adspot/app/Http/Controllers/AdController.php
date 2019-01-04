<?php

namespace App\Http\Controllers;

use App\Ad;
//use DemeterChain\Ad;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $ads = Ad::all()->sortByDesc('created_at');

	    //return $ads;

	    //$ads = DB::table('ads')->latest()->get();

    	return view('pages.listing', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

	    // Validate the request data
	    $this->validate( request(), [
		    'title' => 'required',
		    'price' => 'required',
		    'description' => 'required'
	    ]);


        // Create a new ad using the request data
        //$ad = new Ad;

        // Save it to do database
	    //$ad->title = request('title');
	    //$ad->price = request('price');
	    //$ad->description = request('description');
		//
	    //$ad->save();

	    Ad::create([
		    'title' => request('title'),
		    'price' => request('price'),
		    'description' => request('description')
	    ]);

	    // And the redirect to the listing of ads page
	    return redirect('/ads');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ad  $id
     * @return \Illuminate\Http\Response
     */
	public function show($id) {

		$ad = Ad::findOrFail($id);

		$ad->user;

		//$ad = DB::selectOne( 'select * from ads where id = :id', ['id' => $id ] );

		return view('pages.single', compact('ad') );

	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ad $ad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ad $ad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad $ad)
    {
        //
    }
}
