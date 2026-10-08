<?php

namespace App\Controllers;

use App\Models\TaskModel;
use CodeIgniter\I18n\Time;

class Home extends BaseController
{
    public function index(): string
    {
        $taskModel = new TaskModel();

        return view('welcome', [
            'title' => 'Welcome',
            'today' => Time::today()->toLocalizedString('MMMM d, yyyy'),
            'tasks' => $taskModel->getToday(),
        ]);
    }
}
