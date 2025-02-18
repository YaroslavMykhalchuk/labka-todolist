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

        <div class="container mt-4">
            <h1 class="text-center">To-Do List - На оцінку 4</h1>

            <form action="{{ route('tasks5.store') }}" method="POST" class="mb-4">
                @csrf
                <div class="input-group">
                    <input type="text" name="description" class="form-control" placeholder="Enter task" required>
                    <select name="priority" class="form-select" required>
                        <option value="high">Високий</option>
                        <option value="medium" selected>Середній</option>
                        <option value="low">Низький</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Add Task</button>
                </div>
            </form>

            <ul class="nav nav-tabs" id="taskTabs">
                <li class="nav-item">
                    <a class="nav-link active" id="pending-tab" data-bs-toggle="tab" href="#pending">Незавершені</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="completed-tab" data-bs-toggle="tab" href="#completed">Завершені</a>
                </li>
            </ul>
    
            <div class="tab-content mt-3">
                <!-- Незавершені завдання -->
                <div class="tab-pane fade show active" id="pending">
                    <h3>Незавершені завдання</h3>
                    <ul class="list-group">
                        @foreach($pendingTasks->sortBy([['priority', 'desc']]) as $task)
                            <li class="list-group-item d-flex justify-content-between align-items-center 
                                @if($task->priority == 'high') bg-danger text-white 
                                @elseif($task->priority == 'medium') bg-warning 
                                @else bg-success text-white @endif">
                                {{ $task->description }} ({{ ucfirst($task->priority) }})
                                <form action="{{ route('tasks5.updateStatus', $task->id) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-light btn-sm">Завершити</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
    
                <!-- Завершені завдання -->
                <div class="tab-pane fade" id="completed">
                    <h3>Завершені завдання</h3>
                    <ul class="list-group">
                        @foreach($completedTasks->sortBy([['priority', 'desc']]) as $task)
                            <li class="list-group-item 
                                @if($task->priority == 'high') bg-danger text-white 
                                @elseif($task->priority == 'medium') bg-warning 
                                @else bg-success text-white @endif">
                                <s>{{ $task->description }} ({{ ucfirst($task->priority) }})</s>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
