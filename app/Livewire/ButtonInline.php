<?php

namespace App\Livewire;

use Livewire\Component;

class ButtonInline extends Component
{
    public function render()
    {
        return <<<'HTML'
        <button class="bg-black text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-800 transition">
            Botão maneiro
        </button>
        HTML;
    }
}
