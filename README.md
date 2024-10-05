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

Dessa forma a propriedade `$counter` será iniciada com o valor `50`. Não importa o que passamos antes ou até mesmo na view, ele vai responder com o valor `50`.

Isso ocorre porque o método `mount()` é executado quando está sendo montada a página.

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

### Reset Properties

Para resetar as propriedades do componente podemos utilizar o método `reset()`.

```php
public function refresh()
{
    $this->reset('name', 'lastName');
}
```

Desta forma quando acionarmos o método `refresh()` as propriedades `name` e `lastName` serão resetadas. Se não passarmos nenhum argumento para o método `reset()` todas as propriedades serão resetadas. Vale ressaltar que se tiver algo setado na propriedade ele será resetado para o valor inicial, não para o valor do `mount()`, porque como dito o `mount()` é executado somente quando carregamos a página.

```php
// Se utilizarmos o reset() ele vai usar o nome 'Ygor' e não 'Combizera'
public string $name = 'Ygor';

public function mount(): void
{
    $this->fill([
        'name'      => 'Combizera',
    ]);
}
```

### Lock Properties
 Também é possível travar as propriedades para que não possam ser alteradas. Tem duas formas de fazer isso (inclusive tem como fazer as 2 juntas).
 
[Documentação](https://livewire.laravel.com/docs/properties#security-concerns)


A primeira é utilizando o método `lock()`.

```php
#[Locked]
public int $counter = 0;
```
Já a segunda é utilizando o próprio Laravel com as `polices`.
