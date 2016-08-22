<!DOCTYPE html>
<html>
    <head>
        <title>Francisco Corrales - Laravel Test - Hangar </title>

		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <style>
            html, body {
                height: 100%;
            }

            body {
				font-family: 'Raleway', sans-serif;
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
                margin: 20px;
            }
            h1{
				font-weight: normal;
			}
            .songs{
				text-align: left;
			}
			
			.songs label, .songs p{
				display: inline-block;
			}
			
			.songs p{
				margin: 0;
			}
			
			.songs label {
				width: 100px;
			}
			
			.songs .song{
				margin-bottom: 35px;
				border-bottom: 1px black solid;
			}
			
			.preview{
				text-align: center;
			}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Songs API</div>
                <p style="text-align: left;">Complete information on the API's usage:</p>
                <a href="https://github.com/franciscocorrales/hangarcr-recruitment">https://github.com/franciscocorrales/hangarcr-recruitment</a>
                
                <div class="songs">
					@if( null != $songs  &&  count($songs) )
						<h1>Songs currently on the API:</h1>
						
						@foreach($songs as $song)
							<div class="song">
								<div><label>id:</label><p>{{$song['attributes']['id']}}</p></div>
								<div><label>url:</label><p>{{$song['attributes']['url']}}</p></div>
								<div><label>songname:</label><p>{{$song['attributes']['songname']}}</p></div>
								<div><label>artistid:</label><p>{{$song['attributes']['artistid']}}</p></div>
								<div><label>artistname:</label><p>{{$song['attributes']['artistname']}}</p></div>
								<div><label>albumid:</label><p>{{$song['attributes']['albumid']}}</p></div>
								<div><label>albumname:</label><p>{{$song['attributes']['albumname']}}</p></div>
								<div><label>created_at:</label><p>{{$song['attributes']['created_at']}}</p></div>
								<div><label>updated_at:</label><p>{{$song['attributes']['updated_at']}}</p></div>
								<div class="preview">
									<iframe src="https://embed.spotify.com/?uri={{$song['attributes']['url']}}" width="300" height="80" frameborder="0" allowtransparency="true"></iframe>
								</div>
							</div>
						@endforeach
						
					@endif
                </div>
                
            </div>
        </div>
    </body>
</html>
