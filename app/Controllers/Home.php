<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index(): string
    {
        $taskModel = new TaskModel();

        $data = [
            'title' => 'Welcome',
            'tasks' => $taskModel->getTodaysTasks(),
        ];

        return view('welcome', $data);
    }

    public function tasks(): string
    {
        $taskModel = new TaskModel();

        $data = [
            'title' => 'Task List',
            'tasks' => $taskModel->getAllTasks(),
        ];

        return view('tasks', $data);
    }

    public function profile(): string
    {
        $userModel = new UserModel();

        $data = [
            'title' => 'Profile',
            'user' => $userModel->getDemoUser(),
        ];

        return view('profile', $data);
    }

    public function about(): string
    {
        $userModel = new UserModel();

        $data = [
            'title' => 'About',
            'developer' => $userModel->getDemoUser(),
        ];

        return view('about', $data);
    }
}
