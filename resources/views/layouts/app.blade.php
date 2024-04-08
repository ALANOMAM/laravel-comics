<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titolo</title>
    <!-- Includiamo gli assets con la direttiva vite -->
    @vite('resources/js/app.js')
</head>
<body data-bs-theme="dark" >
    
    <div class="container">
        <!--includo il patial header-->
        @include('partials/header')
     
        <main>
            
         <!--predo il contenuto del file home-->
         @yield("content")

        </main>
       
        <!--includo il patial footer-->
        @include('partials/footer')

    </div>
</body>
</html>