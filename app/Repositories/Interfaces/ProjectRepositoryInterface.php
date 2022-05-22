<?php

namespace App\Repositories\Interfaces;

use App\Models\User;

interface ProjectRepositoryInterface 
{
	public function getAllProjects(int|null $pager = null, int|null $userId = null);
	public function getProjectById(int $id);
	public function createProject(array $data);
	public function getProjectsCount(User $user);
}