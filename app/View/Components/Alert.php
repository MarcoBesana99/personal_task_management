<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $message;
    public $color;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $message)
    {
        $this->type = $type;
        $this->message = $message;
        $this->setColor();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }

    private function setColor()
    {
        switch ($this->type) 
        {
            case 'error':
                $this->color = 'red';
                break;
            case 'warning':
                $this->color = 'yellow';
                break;
            case 'success':
                $this->color = 'green';
                break;
            case 'info':
                $this->color = 'blue';
                break;
            default:
                $this->color = 'gray';
                break;
        }
    }
}
