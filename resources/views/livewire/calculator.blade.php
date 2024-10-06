<div class="flex flex-col items-center space-y-4 p-6 bg-gray-800 rounded-lg">
  <x-text-input
    placeholder="Digite o número"
    wire:model="n1"
    {{-- type="number" --}}
    class="p-2 border border-gray-600 rounded-lg w-1/3 bg-gray-700 text-white" />
  
  <select
    wire:model="operator"
    class="p-2 border border-gray-600 rounded-lg w-1/12 bg-gray-700 text-white">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
  
  <x-text-input
    placeholder="Digite o número"
    wire:model="n2"
    {{-- type="number" --}}
    class="p-2 border border-gray-600 rounded-lg w-1/3 bg-gray-700 text-white" />
  
  <x-primary-button
    type="submit"
    wire:click="calculate"
    class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition">
    <span
    wire:loading.class="hidden"
    wire:target="calculate">
      Calcular
    </span>
    
    <span
      wire:loading
      wire:target="calculate">
      Calculando 🤔
    </span>
  </x-primary-button>
  
  <br>
  
  <span
    wire:loading
    wire:target="calculate"
    class="text-pink-500 font-bolt italic">
    Calculando... calma calabreso
  </span>
  
  <div class="text-lg font-semibold text-white">
    Resultado: {{ $result }}
  </div>
</div>
