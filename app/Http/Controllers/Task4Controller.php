<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task4;

class Task4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendingTasks = Task4::where('status', false)->get();
        $completedTasks = Task4::where('status', true)->get();
        return view('tasks4.index', compact('pendingTasks', 'completedTasks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string'
        ]);

        Task4::create([
            'description' => $request->description]
        );

        return redirect()->route('tasks4.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStatus(string $id)
    {
        $task = Task4::findOrFail($id);
        $task->status = true;
        $task->save();
        return redirect()->route('tasks4.index');
    }
}
