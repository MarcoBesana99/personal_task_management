<?php

namespace App\Repositories\Interfaces;

interface ProjectRepositoryInterface 
{
	public function getAllProjects(int|null $pager = null);
	public function getProjectById(int $id);
	public function createProject(array $data);
}