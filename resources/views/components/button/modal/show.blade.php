@props([
'modal'
])

<x-hybrid-button-danger wire:click="$toggle('{{ $modal }}')"
    wire:loading.attr="disabled">
    {{ $slot }}
</x-hybrid-button-danger>
