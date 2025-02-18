<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>To-Do List</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('tasks.index') }}">
                    <a class="navbar-brand fw-bold" href="{{ route('home') }}">To-Do List</a>
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tasks.index') }}">На оцінку 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tasks4.index') }}">На оцінку 4</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tasks5.index') }}">На оцінку 5</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        Тут додати текст завдання!
    </body>
</html>
