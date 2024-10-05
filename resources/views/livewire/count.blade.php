<div>
  <h2 class="h2">Livewire Count Component</h2>
  <div>{{ $counter }}</div>
  <x-primary-button wire:click="count">
    +1
  </x-primary-button>
  
  <br>
  <br>
  
  Name:: {{ $name }}
  <br>
  Last Name:: {{ $lastName }}
</div>
