# Laravel Hybrid Components

-- UNDER CONSTRUCTION --

Laravel components build with Tailwind, AlpineJS and Livewire

## Buttons

### Base button

```php
<x-hybrid-button>
    Delete
</x-hybrid-button>
```

## Modal

### Base modal

```php
<x-hybrid-modal times="true" cancel="true" confirm="false" open-on-init="false">
    <x-hybrid-button color="green">
        Open modal
    </x-hybrid-button>

    <x-slot name="title">
        My first modal
    </x-slot>

    <x-slot name="content">
        Content goes here
    </x-slot>

    <x-slot name="footer">
        <x-hybrid-button color="orange">Another action button</x-hybrid-button>
    </x-slot>
</x-hybrid-modal>
```
