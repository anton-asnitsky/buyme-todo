<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
Use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return Todo::all();
    }
 
    public function show(Todo $todo)
    {
        return $todo;
    }

    public function store(Request $request)
    {
        $todo = Todo::create($request->all());

        return response()->json($todo, 201);
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->update($request->all());

        return response()->json($todo, 200);
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        
        return response()->json(null, 204);
    }
}