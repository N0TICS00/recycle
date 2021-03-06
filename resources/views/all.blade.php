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
    <?php $collection =collect($withdrawals)->groupBy("day");?>
    <h1>Ritiri in settimana</h1>
        <div class="card-div">
        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Lunedì</h5>
            
                   
                    @if($collection->has("Lunedì"))
                    @foreach($collection["Lunedì"] as $withdrawal)
                    <form action="{{ route('withdrawals.destroy', $withdrawal->id)}}" method="POST">
                    @method('delete')
                    @csrf
                    <li>{{$withdrawal->material}} alle ore {{$withdrawal->hour_start}}/{{$withdrawal->hour_end}}</li>
                    <button type="submit" class="btn btn-sm btn-dark">Elimina</button>
                    </form>
                    @endforeach
                    @endif
                
            </div>
        </div>
        
        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Martedì</h5>
             @if($collection->has("Martedì"))
                    @foreach($collection["Martedì"] as $withdrawal)
                    <form action="{{ route('withdrawals.destroy', $withdrawal->id)}}" method="POST">
                    @method('delete')
                    @csrf
                    <li>{{$withdrawal->material}} alle ore {{$withdrawal->hour_start}}/{{$withdrawal->hour_end}}</li>
                    <button type="submit" class="btn btn-sm btn-dark">Elimina</button>
                    </form>
                    @endforeach
                    @endif
            </div>
        </div>

        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Mercoledì</h5>
             @if($collection->has("Mercoledì"))
                    @foreach($collection["Mercoledì"] as $withdrawal)
                    <form action="{{ route('withdrawals.destroy', $withdrawal->id)}}" method="POST">
                    @method('delete')
                    @csrf
                    <li>{{$withdrawal->material}} alle ore {{$withdrawal->hour_start}}/{{$withdrawal->hour_end}}</li>
                    <button type="submit" class="btn btn-sm btn-dark">Elimina</button>
                    </form>
                    @endforeach
                    @endif
            </div>
        </div>

        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Giovedì</h5>
             @if($collection->has("Giovedì"))
                    @foreach($collection["Giovedì"] as $withdrawal)
                    <form action="{{ route('withdrawals.destroy', $withdrawal->id)}}" method="POST">
                    @method('delete')
                    @csrf
                    <li>{{$withdrawal->material}} alle ore {{$withdrawal->hour_start}}/{{$withdrawal->hour_end}}</li>
                    <button type="submit" class="btn btn-sm btn-dark">Elimina</button>
                    </form>
                    @endforeach
                    @endif
            </div>
        </div>

        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Venerdì</h5>
             @if($collection->has("Venerdì"))
                    @foreach($collection["Venerdì"] as $withdrawal)
                    <form action="{{ route('withdrawals.destroy', $withdrawal->id)}}" method="POST">
                    @method('delete')
                    @csrf
                    <li>{{$withdrawal->material}} alle ore {{$withdrawal->hour_start}}/{{$withdrawal->hour_end}}</li>
                    <button type="submit" class="btn btn-sm btn-dark">Elimina</button>
                    </form>
                    @endforeach
                    @endif
            </div>
        </div>

        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Sabato</h5>
             @if($collection->has("Sabato"))
                    @foreach($collection["Sabato"] as $withdrawal)
                    <form action="{{ route('withdrawals.destroy', $withdrawal->id)}}" method="POST">
                    @method('delete')
                    @csrf
                    <li>{{$withdrawal->material}} alle ore {{$withdrawal->hour_start}}/{{$withdrawal->hour_end}}</li>
                    <button type="submit" class="btn btn-sm btn-dark">Elimina</button>
                    </form>
                    @endforeach
                    @endif
            </div>
        </div>

        <div class="card" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">Domenica</h5>
             @if($collection->has("Domenica"))
                    @foreach($collection["Domenica"] as $withdrawal)
                    <form action="{{ route('withdrawals.destroy', $withdrawal->id)}}" method="POST">
                    @method('delete')
                    @csrf
                    <li>{{$withdrawal->material}} alle ore {{$withdrawal->hour_start}}/{{$withdrawal->hour_end}}</li>
                    <button type="submit" class="btn btn-sm btn-dark">Elimina</button>
                    </form>
                    @endforeach
                    @endif
            </div>
        </div>
        </div>
        <p><a href="/add"><button class="btn btn-sm btn-dark">Aggiungi Ritiri</button></a></p>
        <a href="/"><button class="btn btn-sm btn-dark">Home</button></a>
</body>
</html>