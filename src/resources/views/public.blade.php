    <!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>CKEC</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="homepage"
        @auth
          data-auth="true"
        @endauth
        ></div>
        
        @auth                  
          <div id="profile"></div>       
        @endauth
       
        <script src="{{ asset('js/app.js') }}"></script>   
        <script src="{{ asset('js/home.js') }}"></script>   
        @auth    
          <script src="{{ asset('js/profile.js') }}"></script> 
        @endauth      
    </body>
    </html>