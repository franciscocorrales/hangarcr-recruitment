<?php
 
class SongsTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('songs')->delete();
 
        User::create(array(
			'id' => '25479197',
            'url' => 'spotify:album:3qfz9wig4gcrb4bimw9ov7',
            'songname' => 'johnny b. goode',
            'artistid' => '45',
            'artistname' => 'chuck berry',
            'albumid' => '235469',
            'albumname' => 'roll over beethoven'
        ));
 
    }
 
}
