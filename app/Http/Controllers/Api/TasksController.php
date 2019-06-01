<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;

class TasksController extends Controller
{
    private $task;

    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    public function index()
    {
        $data = ['data'=>$this->task->orderBy('priority')->get()];
        return response()->json($data);
    }

    
    public function show($id)
    {
        $task = $this->task->find($id);
        if(! $task){
            return response()->json(['data'=>['msg'=>'task not found']],404);
        }
        return response()->json(['data'=>$task]);
    }

    public function store(Request $request)
    {
        $taskData = $request->all();
        $this->task->create($taskData);
        $data = ['data'=>['msg'=>'task created with success']];
        return response()->json($data, 201);
    }

    public function update(Request $request, $id)
    {
        $taskData = $request->all();
        $task = $this->task->find($id);
        if(! $task){
            return response()->json(['data'=>['msg'=>'task not found']],404);
        }
        $task->update($taskData);
        $data = ['data'=>['msg'=>'task updated with success']];
        return response()->json($data, 201);
    }

    public function delete($id)
    {
        $task = $this->task->find($id);
        if(! $task){
            return response()->json(['data'=>['msg'=>'task not found']],404);
        }
        $task->delete();
        $data = ['data'=>['msg'=>'task deleted with success']];
        return response()->json($data, 200);
    }}
