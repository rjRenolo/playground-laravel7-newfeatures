<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navigation extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return <<<'blade'
                <div class="bg-blue-400">
                    <!-- He who is contented is rich. - Laozi -->
                    <h1>Inline Component</h1>
                </div>
                blade;
    }
}
