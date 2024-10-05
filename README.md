# Livewire V3

## Components

Um componente Livewire é composto de uma `Class` e uma `view`.

A classe é responsável por gerenciar o estado do componente e a view é responsável por renderizar o componente.

Por padrão toda Classe Livewire deve extender a classe `Livewire\Component` e também deve implementar o método `render()` que é responsável por renderizar o componente.

```php
public function render(): View
{
    return view('livewire.count');
}
```

### Componentes Inline
Também é possível criar um componente `inline` que não cria uma `view`, somente uma `Class`. Isso é útil para componentes pequenos por exemplo, como um botão. 

```bash
php artisan make:livewire button-inline --inline
```

## Propriedades

Para iniciar uma propriedade no Livewire utilizar o método `mount()`.

```php
public function mount(): void
{
    $this->counter = 50;
}
```

Dessa forma a propertie `$counter` será iniciada com o valor `50`. Não importa o que passamos antes ou até mesmo na view, ele vai responder com o valor `50`.

```php
public int $counter = 0;

public function mount(): void
{
    $this->counter = 50;
}

// View
<livewire:count :counter="10"  />

// Resultado
50
```

### Preenchendo em massa as propriedades

Podemos utilizar o método `fill()` para preencher em massa as propriedades.

```php
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
```

### Data Binding
 O Livewire suporta `data binding` para propriedades. Isso significa que podemos passar valores para as propriedades do componente diretamente da view.

Atualizando a view com um input e botão de refresh
 
```bladehtml
<p class="mt-10">Atualizar o contador</p>
<x-text-input wire:model="counter" class="mb-4" />

<x-primary-button wire:click="refresh" class="mb-4">
Refresh
</x-primary-button>
```

Por fim adicionar o método `refresh()` na classe do componente.

```php
public function refresh()
{
    
}
```

