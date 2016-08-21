<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

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
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Songs API</div>
                <p>Complete information on the API's usage:</p>
                <a href="https://github.com/franciscocorrales/hangarcr-recruitment">https://github.com/franciscocorrales/hangarcr-recruitment</a>
                
                <div>
					@if( null != $songs  &&  count($songs) )
						<h1>Songs currently on the API:</h1>
						<ul>
							@foreach($songs as $song)
								<li>{{song}}</li>
							@endforeach
						</ul>
					@endif
                </div>
                
            </div>
        </div>
    </body>
</html>
