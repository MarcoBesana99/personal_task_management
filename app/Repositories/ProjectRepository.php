<?php

namespace App\Repositories;

use App\Models\Project;
use App\Models\User;
use App\Repositories\Interfaces\ProjectRepositoryInterface;

class ProjectRepository implements ProjectRepositoryInterface
{
	public function getAllProjects(int|null $pager = null, int|null $userId = null)
	{
		$query = Project::orderBy('created_at')
						->filter()
						->when(!is_null($userId), fn ($q) => $q->where('user_id', $userId));

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

	public function getProjectsCount(User $user)
	{
		return Project::where('user_id', $user->id)->count();
	}
}