<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Models\Task as tasks;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $tasks = Task::where('task_flag',1)->get();
        return view('tasks.list',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addnewtask (Request $request)
    {

       
        $request->validate([
            'task_name'=>'required',
            'task_details'=> 'required',
            'task_date' => 'required'
          ]);
          $task= new Task([
            'task_name' => $request->get('task_name'),
            'task_details'=> $request->get('task_details'),
            'task_date'=> $request->get('task_date')
          ]);
          $task->save();
          return redirect('/list')->with('success', 'Task Added');
    }

    public function create()
    {
       return view('shares.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(task $task)
    {
        //
    }
}
