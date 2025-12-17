<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index(){
        $task = [
            ['id'=>1, 'name'=>'Task One', 'due'=>'2024-07-01'],
            ['id'=>2, 'name'=>'Task Two', 'due'=>'2024-07-05'],
            ['id'=>3, 'name'=>'Task Three', 'due'=>'2024-07-10']
        ];
        return view('tasks', ['tasks' => $task]);
    }
}
