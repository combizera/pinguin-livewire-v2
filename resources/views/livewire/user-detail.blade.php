<div>
  User:: {{ $user->name }}
  <br>
  Email:: {{ $user->email }}
  
  <x-primary-button wire:click="refresh">
    Refresh
  </x-primary-button>
</div>
