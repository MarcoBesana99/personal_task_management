<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SidebarLink extends Component
{
    public $isActive = false;
    public $badge = null;
    public $text;
    public $href;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($isActive, $text, $href, $badge = null)
    {
        $this->isActive = $isActive;
        $this->text = $text;
        $this->badge = $badge;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar-link');
    }
}
