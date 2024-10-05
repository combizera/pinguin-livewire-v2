<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Count extends Component
{
    public int $counter = 0;

    public function render(): View
    {
        return view('livewire.count');
    }

    public function count(): void
    {
        $this->counter++;
    }
}