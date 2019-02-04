<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracast</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <title>About</title>
       
    </head>
    <body>
    <h3>About Me</h3>
    <img src="{{ URL::to('/images/blog-icon.png')}}" height="200" width="300" >
    <p>This page allows visitors of my blog to communicate with me at any time with issues related to:</p>
     <ul style="list-style-type:circle;">
     <li> Education</li>
     <li> Health</li>
     <li> Sport</li>
     <li> Events</li>
     </ul>  
    </body>
</html