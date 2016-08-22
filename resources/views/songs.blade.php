<!DOCTYPE html>
<html>
    <head>
        <title>Francisco Corrales - Laravel Test - Hangar </title>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                font-weight: 100;
            }

            .container {
                text-align: center;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 40px;
            }
            
            .songs{
				text-align: left;
			}
			
			.songs label, .songs p{
				display: inline-block;
			}
			
			.songs p{
				float: right;
			}	
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Songs API</div>
                <p>Complete information on the API's usage:</p>
                <a href="https://github.com/franciscocorrales/hangarcr-recruitment">https://github.com/franciscocorrales/hangarcr-recruitment</a>
                
                <div class="songs">
					@if( null != $songs  &&  count($songs) )
						<h1>Songs currently on the API:</h1>
						
						@foreach($songs as $song)
							<div><label>id:</label><p>{{$song['attributes']['id']}}</p></div>
							<div><label>url:</label><p>{{$song['attributes']['url']}}</p></div>
							<div><label>songname:</label><p>{{$song['attributes']['songname']}}</p></div>
							<div><label>artistid:</label><p>{{$song['attributes']['artistid']}}</p></div>
							<div><label>artistname:</label><p>{{$song['attributes']['artistname']}}</p></div>
							<div><label>albumid:</label><p>{{$song['attributes']['albumid']}}</p></div>
							<div><label>albumname:</label><p>{{$song['attributes']['albumname']}}</p></div>
							<div><label>created_at:</label><p>{{$song['attributes']['created_at']}}</p></div>
							<div><label>updated_at:</label><p>{{$song['attributes']['updated_at']}}</p></div>
						@endforeach
						
					@endif
                </div>
                
            </div>
        </div>
    </body>
</html>
