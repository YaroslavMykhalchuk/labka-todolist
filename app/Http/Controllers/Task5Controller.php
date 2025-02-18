<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task5;

class Task5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendingTasks = Task5::where('completed', false)->get();
        $completedTasks = Task5::where('completed', true)->get();

        return view('tasks5.index', compact('pendingTasks', 'completedTasks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'priority' => 'required|in:low,medium,high',
        ]);

        Task5::create([
            'description' => $request->description,
            'priority' => $request->priority,
        ]);

        return redirect()->route('tasks5.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStatus(string $id)
    {
        $task = Task5::findOrFail($id);
        $task->completed = true;
        $task->save();

        return redirect()->route('tasks5.index');
    }
}
