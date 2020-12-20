@props([
'color',
'text' => null,
'bgTint'=> 600,
'hoverBgTint'=>null,
'focusBorderTint'=>null,
])

@php
$text = $text ?? ($bgTint > 400 ? 'white' : 'black');

$hoverBgTint = $hoverBgTint ?? $bgTint - 100;
$focusBorderTint = $focusBorderTint ?? $bgTint + 200;
@endphp

<button
    {{ $attributes->merge(['type' => 'button', 'class' => "inline-flex items-center justify-center px-4 py-2 bg-${color}-${bgTint} border border-transparent rounded-md font-semibold text-xs text-${text} hover:bg-${color}-${hoverBgTint} focus:outline-none focus:border-${color}-${focusBorderTint} focus:shadow-outline-${color} active:bg-${color}-${bgTint} transition ease-in-out duration-150"]) }}>
    {{ $slot }}
</button>
