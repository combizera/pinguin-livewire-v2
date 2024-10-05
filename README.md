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