<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SideBar extends Component
{
    public $title;
    public $info;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $info)
    {
        $this->title = $title;
        $this->info = $info;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        // return view('components.side-bar', [
        //     'list' => $this->list()
        // ]);
        return view('components.side-bar');
    }

    // Turning public function to variable.
    public function list($newItem){
        return [
            'Hi',
            'HELLo',
            'Hatdog',
            $newItem
        ];
    }
}
