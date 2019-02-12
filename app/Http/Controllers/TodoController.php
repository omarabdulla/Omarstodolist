<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // Create
    public function create(Request $request)
    {
      // create new entry
      $todo = Todo::create($request->all());

      // return new entry
      return $todo;

    }

    // Edit
    public function edit(Request $request, $id)
    {
      // find item
      $todo = Todo::findOrFail($id);

      // edit with new request
      $todo->update($request->all());

      // return item
      return $todo;

    }

    // Remove
    public function remove($id)
    {
      // find id and remove
      $todo = Todo::destroy($id);

      // return success
      return $todo;

    }

   // list
    public function list()
    {
      // find all
      $todo = Todo::where('archived',false)->get();
      //return all
      return $todo;
    }
    // list
    public function listArchived()
    {
      // find all
      $todo = Todo::where('archived',true)->get();
      //return all
      return $todo;
    }
    // Edit
    public function archive($id)
    {
      // find item
      $todo = Todo::findOrFail($id);
      // edit with new request
      $todo->update(['archived' => true]);
      // return item
      return $todo;
    }
}
