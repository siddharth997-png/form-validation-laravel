<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component {
    public $type, $name, $title;
    public function __construct($type, $name, $title) {
        $this->type = $type;
        $this->name = $name;
        $this->title = $title; 
    }

   
    public function render()
    {
        return view('components.input');
    }
}
