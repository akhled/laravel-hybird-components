@php
$color = $attributes->get('color');
$text = $attributes->get('text');
$bgTint = $attributes->get('bg-tint');
$hoverBgTint = $attributes->get('hover-bg-tint');
$focusBorderTint = $attributes->get('focus-border-tint');

$bgTint = $bgTint ?? 500;
$text = $text ?? ($bgTint >= 500 ? 'white' : 'black');

$hoverBgTint = $hoverBgTint ?? $bgTint - 100;
$focusBorderTint = $focusBorderTint ?? $bgTint + 200;
@endphp

<button
    {{ $attributes->merge(['type' => 'button', 'class' => "inline-flex items-center justify-center px-4 py-2 bg-${color}-${bgTint} border border-transparent rounded-md font-semibold text-xs text-${text} hover:bg-${color}-${hoverBgTint} focus:outline-none focus:border-${color}-${focusBorderTint} focus:shadow-outline-${color} active:bg-${color}-${bgTint} transition ease-in-out duration-150"]) }}>
    {{ $slot }}
</button>
