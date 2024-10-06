<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{

    public float $n1 = 0;

    public float $n2 = 0;

    public string $operator = '+';

    public ?float $result = null;

    public function render()
    {
        return view('livewire.calculator');
    }

    public function calculate()
    {
        sleep(2);
        $tmp = "{$this->n1}{$this->operator}{$this->n2};";

        $this->result = eval('return ' . $tmp);
    }

    public function naoQueroY()
    {
        $this->n1 = str($this->n1)->replace('y', 'I', true);
        sleep(3);
    }
}
