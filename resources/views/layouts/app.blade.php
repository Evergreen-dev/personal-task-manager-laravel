<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Task Manager</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<div class="app">

    <aside class="sidebar">
        <h2>TaskFlow</h2>

        <nav>
            <a href="{{ route('tasks.index') }}">
                <span class="material-icons">dashboard</span>
                Dashboard
            </a>

            <a href="{{ route('tasks.create') }}">
                <span class="material-icons">add_circle</span>
                Add Task
            </a>
        </nav>

        <div class="profile">
            <div class="avatar">JI</div>

            <div>
                <h4>John Ivan</h4>
                <small>BSIT Student</small>
            </div>
        </div>
    </aside>

    <main class="content">

        @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
        @endif

        @yield('content')

    </main>

</div>

</body>
</html>