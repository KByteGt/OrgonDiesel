<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Section extends Component
{
     public $id;
     public $title;
     public $tag;
     public $paragraph;

    /**
     * Create a new component instance.
     *
     * @param $id
     * @param $class
     * @param $title
     * @param $subtitle
     */
    public function __construct($id, $tag, $title)
    {
        $this->id = $id;
        $this->title = $title;
        $this->tag = $tag;
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
