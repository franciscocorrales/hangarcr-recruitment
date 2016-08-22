<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Song;



class SongsController extends Controller
{	
    public function all(){
		
		$songs = Song::all();
		
		if(is_null($songs)){
			return \Response::json(array('error'=> 404, 'message'=> 'Not found'), 404);
		}
		
		return \Response::json(
			array(
				'success' => true,
				'songs'=> $songs->toArray()
		));
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
			return \Response::json(array('error'=> 404, 'message'=> 'Not found'), 404);
		}
		
        return \Response::json(
			array(
				'success' => true,
				'song'=> $song->toArray()
		));
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
			return \Response::json(array('error'=> 404, 'message'=> 'Not found'), 404);
		}
                
        $song->update($request->all());
        $success = $song->save();
         
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
        
        $success = $song->delete();
        
		if($success){
			return \Response::json(
				array(
					'success' => true
			));
		}
		
		return \Response::json(array('error'=> 400, 'message'=> 'Bad request'), 400);
    }
}
