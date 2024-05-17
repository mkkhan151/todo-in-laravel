<!DOCTYPE html>
<html>
<head>
    <title>Show Todo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Todo</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('todos.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $todo->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Completed:</strong>
                {{ $todo->completed ? 'Yes' : 'No' }}
            </div>
        </div>
    </div>
</div>
</body>
</html>
