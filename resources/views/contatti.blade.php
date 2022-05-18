<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">

    <title>Document</title>
</head>
<body>
    <header>
    <nav>
            <ul>
                <li>lol</li>
                <li>ss</li>
                <li>aa</li>
            </ul>
        </nav>
    </header>
    <main>  
        <h1>Contatti</h1>
        <p>
            @if ($frase = 'LOL')
                {{$frase}} : 12345
            @else
                no frase
            @endif
          
        </p>
     

    </main>
    <footer>

    </footer>
    
</body>
</html>