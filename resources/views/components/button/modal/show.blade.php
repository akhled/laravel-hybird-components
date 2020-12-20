<x-hybrid-button {{ $attributes->merge([
    'x-on:click' => 'showModal = true',
    'wire:loading.attr' => 'disabled',
]) }}>
    {{ $slot }}
</x-hybrid-button>
