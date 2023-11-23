<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AddImage extends Component
{
    public string $defaultImage;

    public function __construct(string $defaultImage)
    {
        $this->defaultImage = $defaultImage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.add-image');
    }
}
