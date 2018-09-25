<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
Use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        header('Access-Control-Allow-Origin: *');
        return response()->json(['todos' => Todo::all()]);
    }
 
    public function show(Todo $todo)
    {
        return response()->json(['todos' => $todo]);
    }

    public function store(Request $request)
    {
        $todo = Todo::create($request->all());

        header('Access-Control-Allow-Origin: *');
        return response()->json(['todos' => $todo], 201);
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->update($request->all());

        header('Access-Control-Allow-Origin: *');
        return response()->json(['todos' => $todo], 200);
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        header('Access-Control-Allow-Origin: *');
        return response()->json(null, 204);
    }
}
