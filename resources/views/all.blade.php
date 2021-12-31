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
<style>
    *{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
body{
    text-align:center;
}
.card-div{
   width:18rem;
   margin:50px auto;

}

</style>
<body >
    <h1>Ritiri in settimana</h1>
        <div class="card-div">
        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Lunedì</h5>
        @foreach($retires as $retire)
            @if($retire->day == "Lunedì")


            
            <li>{{$retire->material}} alle ore {{$retire->hour_start}}/{{$retire->hour_end}}</li>

   

            @endif
        @endforeach
        

            </div>
        </div>
        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Martedì</h5>
            @foreach($retires as $retire)
                @if($retire->day == "Martedì")
                 
            <li>{{$retire->material}} alle ore {{$retire->hour_start}}/{{$retire->hour_end}}</li>
            
             
                @endif
            @endforeach
            </div>
        </div>
        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Mercoledì</h5>
             @foreach($retires as $retire)
                @if($retire->day == "Mercoledì")
 
            <li>{{$retire->material}} alle ore {{$retire->hour_start}}/{{$retire->hour_end}}</li>
            

                @endif
            @endforeach
            </div>
        </div>
        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Giovedì</h5>
             @foreach($retires as $retire)
                @if($retire->day == "Giovedì")
                 
            <li>{{$retire->material}} alle ore {{$retire->hour_start}}/{{$retire->hour_end}}</li>
            
             
                @endif
            @endforeach
            </div>
        </div>
        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Venerdì</h5>
             @foreach($retires as $retire)
                @if($retire->day == "Venerdì")
                 
            <li>{{$retire->material}} alle ore {{$retire->hour_start}}/{{$retire->hour_end}}</li>
            
             
                @endif
            @endforeach
            </div>
        </div>
        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Sabato</h5>
             @foreach($retires as $retire)
                @if($retire->day == "Sabato")
                 
            <li>{{$retire->material}} alle ore {{$retire->hour_start}}/{{$retire->hour_end}}</li>
            
             
                @endif
            @endforeach
            </div>
        </div>
        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Domenica</h5>
             @foreach($retires as $retire)
                @if($retire->day == "Domenica")
                 
            <li>{{$retire->material}} alle ore {{$retire->hour_start}}/{{$retire->hour_end}}</li>
            
             
                @endif
            @endforeach
            </div>
        </div>
        </div>
        <p><a href="/add"><button class="btn btn-sm btn-dark">Aggiungi Ritiri</button></a></p>
        <a href="/"><button class="btn btn-sm btn-dark">Home</button></a>
</body>
</html>