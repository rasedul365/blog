<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostIndex extends Component
{
    public $active;

    public function render()
    {
        return view('livewire.post-index');
    }
}