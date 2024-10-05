<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Count extends Component
{
    public $name = 1;

    public function render(): View
    {
        return view('livewire.count');
    }
}