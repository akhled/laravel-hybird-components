# Laravel Hybrid Components

-- UNDER CONSTRUCTION --

Laravel components build with Tailwind, AlpineJS and Livewire

## Buttons

### Danger

```php
<x-hybrid-button-danger>
    Delete
</x-hybrid-button-danger>
```

## Modal

### Main

```php
<x-hybrid-modal id="testModal">
    <x-hybrid-button-modal-show color="green-600">
    </x-hybrid-button-modal-show>

    <x-slot name="title">
    </x-slot>

    <x-slot name="content">
    </x-slot>

    <x-slot name="footer">
    </x-slot>
</x-hybrid-modal>
```
