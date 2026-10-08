<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index(): string
    {
        $taskModel = new TaskModel();

        return view('tasks', [
            'title' => 'Task List',
            'tasks' => $taskModel->getAllOrderedByDate(),
        ]);
    }
}
