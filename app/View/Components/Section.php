<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Section extends Component
{
     public $id;
     public $class;
     public $title;
     public $subtitle;
     public $paragraph;

    /**
     * Create a new component instance.
     *
     * @param $id
     * @param $class
     * @param $title
     * @param $subtitle
     * @param null $paragraph
     */
    public function __construct($id, $class, $title, $subtitle, $paragraph = null)
    {
        $this->id = $id;
        $this->class = $class;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->paragraph = $paragraph;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.section');
    }
}