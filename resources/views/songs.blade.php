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
							<pre>
								{{ print_r($song['attributes'])}}
							</pre>
						@endforeach
						
					@endif
                </div>
                
            </div>
        </div>
    </body>
</html>
