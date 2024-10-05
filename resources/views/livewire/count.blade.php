<div>
  <h1 class="text-lg font-semibold mb-4">Livewire Count Component</h1>
  
  <div class="mb-4 flex gap-2 items-center">
    <div class="text-2xl font-bold">{{ $counter }}</div>
    
    <x-primary-button wire:click="count" class="mt-2">
      +1
    </x-primary-button>
  </div>
  
  <p class="mt-10">Atualizar o contador</p>
  <x-text-input wire:model="counter" class="mb-4" />
  
  <x-primary-button wire:click="refresh" class="mb-4">
    Refresh
  </x-primary-button>
  
  <div x-data="">
    <span x-text="$wire.name"></span>
    <x-secondary-button @click="$wire.set('name', 'zezinho')">
      Change Name
    </x-secondary-button>
  </div>
  
  <div class="mt-4">
    .: Informações pessoais :.
    <p class="font-medium text-gray-400">Name: <span class="font-normal text-gray-100">{{ $name }}</span></p>
    <p class="font-medium text-gray-400">Last Name: <span class="font-normal text-gray-100">{{ $lastName }}</span></p>
  </div>
</div>
