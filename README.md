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
<x-hybrid-modal>
    <x-hybrid-button color="green">
        Open modal
    </x-hybrid-button>

    <x-slot name="title">
    </x-slot>

    <x-slot name="content">
        Hi
    </x-slot>

    <x-slot name="footer">
    </x-slot>
</x-hybrid-modal>
```
