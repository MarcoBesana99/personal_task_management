<?php

namespace App\View\Components;

use App\Repositories\Interfaces\ProjectRepositoryInterface;
use Illuminate\View\Component;

class AsideBar extends Component
{
    private ProjectRepositoryInterface $projectRepository;

    public $projectsCount = 0;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(ProjectRepositoryInterface $projectRepository)
    {
        $this->projectRepository = $projectRepository;
        $this->setProjectsCount();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.aside-bar');
    }

    private function setProjectsCount() : void
    {
        $this->projectsCount = $this->projectRepository->getProjectsCount(auth()->id());
    }
}
