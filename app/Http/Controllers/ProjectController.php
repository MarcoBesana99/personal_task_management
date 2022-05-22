<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectStoreRequest;
use App\Models\Project;
use App\Models\User;
use App\Repositories\Interfaces\ProjectRepositoryInterface;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private ProjectRepositoryInterface $projectRepository;

    public function __construct(ProjectRepositoryInterface $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    public function index()
    {
        $projects = $this->projectRepository->getAllProjects(12, auth()->id());

        return view('areas.project.index', compact('projects'));
    }

    public function create()
    {
        return view('areas.project.create');
    }

    public function store(ProjectStoreRequest $request)
    {
        $this->projectRepository->createProject($request->validated());

        return redirect(route('project.index'))->with('success', __('The project was created successfully'));
    }

    public function show(Project $project)
    {
        return view('areas.project.show', compact('project'));
    }
}
