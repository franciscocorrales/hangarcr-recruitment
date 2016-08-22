<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
	protected $table = 'songs';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url', 'songname', 'artistid', 'artistname','albumid','albumname'
    ];
    
    /* input requirements */
    public static $rules = [
                            'url'        => 'required',
                            'songname'      => 'required',
                            'artistid' => 'required',
                            'artistname'      => 'required',
                            'albumid'      => 'required',
                            'albumname'      => 'required'
                           ];
}
