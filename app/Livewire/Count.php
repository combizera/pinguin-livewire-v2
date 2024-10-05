<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Count extends Component
{
    public int $counter = 0;

    public string $name = '';

    public string $lastName = '';

    public function mount(): void
    {
        $this->fill([
            'counter'   => 50,
            'name'      => 'Combizera',
            'lastName'  => 'Dev'
        ]);
    }

    public function render(): View
    {
        return view('livewire.count');
    }

    public function count(): void
    {
        $this->counter++;
    }

    public function refresh()
    {

    }
}