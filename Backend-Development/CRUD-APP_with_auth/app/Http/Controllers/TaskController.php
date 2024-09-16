<?php

namespace App\Http\Controllers;

use App\Models\Task; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TaskController extends Controller
{
    //for displaying the list of all task
    public function index()
    {
       $tasks = Task::all();
       return view('tasks.index', compact('tasks'));
    }

    //show the form to create a new task
    public function create()
    {
        return view('tasks.create');
    }

    //Store new task
    public function store(Request $request)
    {
        $data = $request -> validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', //we do not need to write the validation rules in a specific order.
        ]);

        if ($request->hasFile('image')) { //here 'image' is takes from html form 
            $imagePath = $request->file('image')->store('images', 'public'); //The store() method will automatically generate a unique filename for the uploaded file and store it in the images folder. By default, the 'public' disk is configured to store files in the "storage/app/public" directory. This directory is publicly accessible via a symbolic link created by running "php artisan storage:link", which links "storage/app/public" to "public/storage". Result: The file will be stored in "storage/app/public/images", and we can access it via URLs like "public/storage/images/filename.png".
            $data['image'] = $imagePath;  
        }

        $data['user_id'] = $request->user()->id;

        Task::create($data);

        return redirect()->route('task.index')->with([
            'message'=>'Task created successfully',
            'alert-type' => 'success'
        ]);
    }

    //show the edit form page
    public function edit(Task $task)
    {
        if($task->user_id != request()->user()->id){
            abort(403);
        }
        return view('tasks.edit', compact('task'));
    }

    //update the task
    public function update(Request $request, Task $task)
    {
        if($task->user_id != request()->user()->id){
            abort(403);
        }

        $data = $request -> validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($task->image) {
                Storage::delete('public/' . $task->image);
            }
    
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        $task->update($data);

        return redirect()->route('task.index')->with([
            'message'=>'Task updated successfully',
            'alert-type' => 'warning'
        ]);
    }

    //View specific Task

    public function show(Task $task)
    {
        if($task->user_id != request()->user()->id){
            abort(403);
        }
        return view('tasks.view', compact('task'));

    }

    //delete the task
    public function destroy(Task $task)
    {
        if($task->user_id != request()->user()->id){
            abort(403);
        }

        $task->delete();

        return redirect()->route('task.index')->with([
            'message'=> 'Task deleted',
            'alert-type' => 'danger'
        ]);
    }


}


