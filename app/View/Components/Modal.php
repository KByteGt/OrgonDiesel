<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $id;
    public $title;
    public $text;
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $title, $text = "Close", $type = "btn-secondary")
    {
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
