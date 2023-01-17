<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section class="main">
         
        <div class="text-card">
            <h1>En Manque d'idée?</h1> <br>
            <h2>Laisse WeWrite t'aider à finir ta rédaction 😎</h2>
        </div>

        <form action="{{route('generate')}}" method="POST" class="input-f">
            @csrf
            <input type="text" class="text" name="text" id="text" placeholder="Rédige moi un article sur....">
            <input type="submit" class="submit" value="Envoyer 🚀">

        </form>

     
        
    </section>
</body>

</html>