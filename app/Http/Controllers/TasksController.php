<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskPostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->paginate(config('app.default_paginate'));

        return view('tasks', compact('tasks'));
    }

    /**
     * Save a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(TaskPostRequest $request)
    {
        $task = new Task;

        Task::create(['name', $request['name']],);

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function delete(Task $task)
    {
        $task->delete();

        return redirect()->route('index');
    }
}
