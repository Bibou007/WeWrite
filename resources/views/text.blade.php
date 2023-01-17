<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="body2">

    <section class="button">
        <button class="button2" onclick='window.location.reload(false)'  >
           Regénérer
        </button>
        
            <a class="button2" href="{{route('index')}}">Quitter</a> 
        
    </section>
    <section class="main2" id="btn-quit">
         
        <div class="card">
            <h2>Voici des informations sur: {{$demande}}</h2>
             <p class="result">
               {{$content}}
            </p>
        </div>

    </section>

</body>

</html>