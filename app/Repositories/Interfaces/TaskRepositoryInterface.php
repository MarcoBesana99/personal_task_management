<?php

namespace App\Repositories\Interfaces;

interface TaskRepositoryInterface 
{
	public function getAllTasks();
	public function getTaskById(int $id);
	public function createTask(array $data);
}