<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
<<<<<<< HEAD
        <link rel="stylesheet"  href="/css/app.css">


        <!-- Scripts -->
        <script src="/js/app.js" defer></script>
=======
          <link rel="stylesheet"  href="/css/app.css">

        <!-- Scripts -->
       <script src="js/app.js"></script>
>>>>>>> 3e85e1cf41ac6604e4dbc81b4636092e4fd756cf
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
