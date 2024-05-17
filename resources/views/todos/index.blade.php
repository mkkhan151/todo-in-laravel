<!DOCTYPE html>
<html>
<head>
    <title>Laravel Todo App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel Todo App</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('todos.create') }}"> Create New Todo</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Completed</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($todos as $todo)
        <tr>
            <td>{{ $todo->id }}</td>
            <td>{{ $todo->title }}</td>
            <td>{{ $todo->completed ? 'Yes' : 'No' }}</td>
            <td>
                <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('todos.show', $todo->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('todos.edit', $todo->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>
