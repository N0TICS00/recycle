<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>
        
        <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .button{
            margin-top: 25%
        }
        .btn{
            margin-top:5px
        }
    </style>
       
    </head>
    <body>

        <div class="button">
        <div class="text-center">
        <a href="/add"><button class="btn btn-lg btn-dark ">Aggiungi ritiri</button></a>
        </div>
        <div class="text-center">
        <a href="/all"><button class="btn btn-lg btn-dark">Guarda tutti i ritiri</button></a>
        </div>
        </div>
      
    </body>
</html>
