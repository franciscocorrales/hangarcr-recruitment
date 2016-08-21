<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SongsController extends Controller
{
	
	public function getJSONSongs(){
		return array(
		
			array(
			'id' => 8815586,
            'url' => 'spotify:track:7linrtr5px7i3r96mducjw',
            'songname' => 'twist and shout',
            'artistid' => 1833,
            'artistname' => 'beatles',
            'albumid' => 5619520,
            'albumname' => 'beatles'
			),
			
			array(
			'id' => 8815587,
            'url' => 'spotify:track:7linrtr5px7i3r96mducjw',
            'songname' => 'i saw her standing there',
            'artistid' => 1833,
            'artistname' => 'beatles',
            'albumid' => 5619520,
            'albumname' => 'beatles'
			)
			,
			
			array(
			'id' => 8815587,
            'url' => 'spotify:track:7linrtr5px7i3r96mducjw',
            'songname' => 'i saw her standing there',
            'artistid' => 1833,
            'artistname' => 'beatles',
            'albumid' => 5619520,
            'albumname' => 'beatles'
			)
			
		
		);
	}
	
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$songs = [];
        return view('songs', getJSONSongs());
    }
    
    public function songs()
    {
		$songs = [];
		return view('songs', getJSONSongs());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
