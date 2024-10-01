<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>
<body>
    <h1>All Tasks</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Percentage</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->email}}</td>
                    <td>{{ $task->percentage}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>


