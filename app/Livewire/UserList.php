<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;

class UserList extends Component
{
    public function render()
    {
        return view('livewire.user-list');
    }

    #[Computed]
    public function users()
    {
        return User::query()
            ->select([
                'id',
                'name',
                'email',
            ])
            ->paginate();
    }
}
