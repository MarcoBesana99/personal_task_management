<?php

namespace App\Repositories;

use App\Models\Project;
use App\Repositories\Interfaces\ProjectRepositoryInterface;

class ProjectRepository implements ProjectRepositoryInterface
{
	public function getAllProjects(int|null $pager = null)
	{
		if (!empty($pager))
		{
			return Project::paginate($pager);
		}
		
		return Project::all();
	}

	public function getProjectById(int $id)
	{
		return Project::find($id);
	}

	public function createProject(array $data)
	{
		return Project::create($data);
	}
}