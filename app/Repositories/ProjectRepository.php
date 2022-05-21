<?php

namespace App\Repositories;

use App\Models\Project;
use App\Repositories\Interfaces\ProjectRepositoryInterface;

class ProjectRepository implements ProjectRepositoryInterface
{
	public function getAllProjects(int|null $pager = null)
	{
		$query = Project::orderBy('created_at')->filter();

		if (!empty($pager))
		{
			return $query->paginate($pager);
		}
		
		return $query->all();
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