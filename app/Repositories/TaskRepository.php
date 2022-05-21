<?php

namespace App\Repositories;

use App\Models\Task;
use App\Repositories\Interfaces\TaskRepositoryInterface;

class TaskRepository implements TaskRepositoryInterface
{
	public function getAllTasks()
	{
		return Task::all();
	}

	public function getTaskById(int $id)
	{
		return Task::find($id);
	}

	public function createTask(array $data)
	{
		return Task::create($data);
	}
}