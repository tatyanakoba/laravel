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
<div>
    <?php if(empty($id)): ?>
    <form method="POST" action="/login" role="form" class="form-horizontal">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="username" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-3">
                <input class="form-control" type="text" id="username" name="username" required>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-3">
                <input class="form-control" type="password" name="password" id="password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-default" value="Login">
            </div>
        </div>
    </form>
    <?php endif; ?>
    <div style="margin-left: 70%">
        <a href= "{{ url('/edit') }}" class="btn btn-primary">Create New Adwert</a>
    </div>
    <div>
        <?php foreach ($advert as $key => $value):
        $author = App\Users::getAuthorName($value['user_id']);
        $id = $value['id'];
        ?>
        <hr>
        <h1 class="text-center">{{ $value['title'] }}</h1>
        <p class="text-center">{{  $value['description'] }}</p>
        <p class="text-center">Author: {{  $author }}</p>
        <p class="text-center">{{  $value['created_at'] }}</p>
        <div class="col-sm-offset-8 col-sm-10">
            <a href="/edit/{{$id}}" class="btn btn-success">Edit</a>
            <a href="/delete/{{$id}}" class="btn btn-danger">Delete</a>
        </div>

        <hr>
        <?php endforeach; ?>
        <?php echo $advert->render(); ?>
    </div>
</div>
</body>
</html>
