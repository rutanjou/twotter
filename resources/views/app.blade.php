<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Twotter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="jumbotron col-12">
                <h1 class="display-3">Twotter</h1>
                <hr class="my-4">
                <a href="{{url('/about')}}">About</a>
            </div>
        </div>

        <div class="row">
            <form action="">
                <input type="text" class="col-8 offset-1 form-control">
                <button class="btn btn-primary col-1 offset-1">Twotter</button>
            </form>
        </div>
    </div>
</body>
</html>