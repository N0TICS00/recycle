<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi un ritiro</title>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        body{
            text-align:center
        }
        .form{
            width:200px;
        }
    </style>
</head>
<body>
    <h1>Aggiungi un ritiro</h1>
    <form action="/add" method="POST">
    {{csrf_field()}}
        <p>
        <input type="text" name="material" placeholder="Materiale" required class="form">
        </p>
        <p>
        <select name="day" class="form">
            <option value="Lunedì">Lunedì</option>
            <option value="Martedì">Martedì</option>
            <option value="Mercoledì">Mercoledì</option>
            <option value="Giovedì">Giovedì</option>
            <option value="Venerdì">Venerdì</option>
            <option value="Sabato">Sabato</option>
            <option value="Domenica">Domenica</option>

    </select>
        </p>
        <p>
        <input type="text" name="hour-start" placeholder="Orario inizio" required class="form"> 
        </p>
        <p>
        <input type="text" name="hour-end" placeholder="Orario fine" required class="form"> 
        </p>
        <p>
        <button class="btn btn-md btn-dark form" type="submit" >Aggiungi</button>
        </p>
    
    </form>
    <p>
    <a href="/"><button class="btn btn-md btn-dark form">Home</button></a>
    </p>
    <a href="/all"><button class="btn btn-md btn-dark form">Guarda tutti i ritiri</button></a>
</body>
</html>