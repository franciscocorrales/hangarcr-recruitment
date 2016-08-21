<?php
 
class SongsTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('songs')->delete();
 
        User::create(array(
			'id' => 2547919',
            'url' => 'spotify:track:3qfz9wig4gcrb4bimw9ov7',
            'songname' => 'johnny b. goode',
            'artistid' => 45,
            'artistname' => 'chuck berry',
            'albumid' => 235469,
            'albumname' => 'roll over beethoven'
        ));
                
        User::create(array(
			'id' => 881558,
            'url' => 'spotify:track:7linrtr5px7i3r96mducjw',
            'songname' => 'moonlight sonata',
            'artistid' => 1830,
            'artistname' => 'beethoven',
            'albumid' => 5619520,
            'albumname' => 'beethoven piano sona'
        ));
        
         User::create(array(
			'id' => 8815586,
            'url' => 'spotify:track:7linrtr5px7i3r96mducjw',
            'songname' => 'twist and shout',
            'artistid' => 1833,
            'artistname' => 'beatles',
            'albumid' => 5619520,
            'albumname' => 'beatles'
        ));
        
         User::create(array(
			'id' => 8815587,
            'url' => 'spotify:track:7linrtr5px7i3r96mducjw',
            'songname' => 'i saw her standing there',
            'artistid' => 1833,
            'artistname' => 'beatles',
            'albumid' => 5619520,
            'albumname' => 'beatles'
        ));
        
         User::create(array(
			'id' => 8815588,
            'url' => 'spotify:track:7linrtr5px7i3r96mducjw',
            'songname' => 'here comes the sun',
            'artistid' => 1833,
            'artistname' => 'beatles',
            'albumid' => 5619520,
            'albumname' => 'beatles'
        ));
                
         User::create(array(
			'id' => 8815589,
            'url' => 'spotify:track:7linrtr5px7i3r96mducjw',
            'songname' => 'hey jude',
            'artistid' => 1833,
            'artistname' => 'beatles',
            'albumid' => 5619520,
            'albumname' => 'beatle'
        ));
        
        User::create(array(
			'id' => 8815590,
            'url' => 'spotify:track:7linrtr5px7i3r96mducjw',
            'songname' => 'helter skelter',
            'artistid' => 1833,
            'artistname' => 'beatles',
            'albumid' => 5619520,
            'albumname' => 'beatles'
        ));
 
    }
 
}
