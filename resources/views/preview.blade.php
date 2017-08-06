<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div align="center">
    <h1 class="text-center">Advert</h1>
    <h1 class="text-center">{{ $data->title }}</h1>
    <p class="text-center">{{  $data->description }}</p>
    <p class="text-center">{{  $data->created_at }}</p>
    <div class="col-sm-offset-5 col-sm-2">
        <a href="/delete/{{$data->id}}" class="btn btn-danger">Delete</a>
    </div>
</div>
</body>
</html>