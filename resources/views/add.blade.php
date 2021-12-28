<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi un ritiro</title>
</head>
<body>
    <h1>Aggiungi un ritiro</h1>
    <form action="/add" method="POST">
    {{csrf_field()}}
        <p>
        <input type="text" name="material" placeholder="Materiale" required>
        </p>
        <p>
        <select name="day">
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
        <input type="text" name="hour" placeholder="Orario" required> 
        </p>
        <p>
        <button type="submit">Aggiungi</button>
        </p>
    
    </form>
    <a href="/"><button>Home</button></a>
</body>
</html>