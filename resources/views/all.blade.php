<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutti i ritiri</title>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body style="text-align:center">
    <h1>Ritiri in settimana</h1>
@foreach($retires as $retire)
        <li>{{$retire->material}} alle ore {{$retire->hour}}, il {{$retire->day}}</li>
        @endforeach
        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Lunedì</h5>
             @foreach($retires as $retire){
                 if($retires->day == 1){
                    <li>$retire</li>;
                 }
             }
             @endforeach
            </div>
        </div>
        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Martedì</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Mercoledì</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Giovedì</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Venerdì</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Sabato</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Domenica</h5>
            </div>
        </div>
</body>
</html>