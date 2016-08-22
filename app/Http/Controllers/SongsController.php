<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Song;

class SongsController extends BaseController
{	
	/*
	 * Our Main page 
	 * 
	 */
	public function index(){
		$songs = Song::all();
		return view('songs', compact('songs'));
	}
	
	
	/**
	 * All songs in the database.
	 * 
	 */
    public function all(){
		
		$songs = Song::all();
				
		return $this->response->array($songs->toArray());

	}
        
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StoreSongRequest $request)
    {	
		if (Song::Create($request->all())) {
			return $this->response->created();
		}

		return $this->response->errorBadRequest();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$song = Song::find($id);
		
		if(is_null($song)){
			return $this->response->errorNotFound();
		}
		
       return $this->response->array($song->toArray());
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
        $song = Song::find($id);
        
        if(is_null($song)){
			return $this->response->errorNotFound();
		}
                
        $song->update($request->all());
        $song->save();
                 
		return \Response::json(
			array(
				'success' => true,
				'song'=> $song->toArray()
		));
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $song = Song::find($id);
        
        if(is_null($song)){
			return $this->response->errorNotFound();
		}
        
		if($song->delete()){
			return \Response::json(
				array(
					'success' => true
			));
		}
		
		return $this->response->errorBadRequest();
    }
}
