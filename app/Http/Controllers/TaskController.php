<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\TaskRepositoryInterface;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private TaskRepositoryInterface $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository) 
    {
        $this->taskRepository = $taskRepository;
    }
}
