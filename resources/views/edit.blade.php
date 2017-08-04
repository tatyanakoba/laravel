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
    <h1 class="text-center">Create New Advert</h1>
    <form method="POST" role="form" class="form-horizontal" action="{{!empty($data) ? "/update/".$data->id : '/create'}}">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="username" class="col-sm-5 control-label">Title</label>
            <div class="col-sm-3">
                <input class="form-control" type="text" id="title" name="title" required value="{{ !empty($data) ? $data->title : '' }}">
            </div>
        </div>
        <div class="form-group">
            <label for="description" class="col-sm-5 control-label">Description</label>
            <div class="col-sm-3">
                <textarea class="form-control"  name="description" id="description" required>{{ !empty($data) ? $data->description : '' }}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-default" value="{{  !empty($data) ? 'Save' : 'Create' }}">
            </div>
        </div>
    </form>
</div>
</body>
</html>