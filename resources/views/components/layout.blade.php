<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>myPortfolio</title>
    @vite (['resources/css/app.css' , 'resources/js/app.js' ])
</head>
<body>
    <x-navbar/>
    <main>
        {{$slot}}
    </main>
    <footer>
        <x-footer/>
    </footer>
</body>
</html>
