<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Count extends Component
{
    #[Locked]
    public int $counter = 0;

    public string $name = 'Ygor';

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
        $this->reset('name', 'lastName');
    }

    #[Computed]
    public function fullName()
    {
        return "$this->name $this->lastName";
    }
}