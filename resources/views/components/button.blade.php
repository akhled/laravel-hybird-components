@php
$textColor = $attributes->get('text-color');
$bgColor = $attributes->get('bg-color');
$bgTint = $attributes->get('bg-tint');
$hoverBgTint = $attributes->get('hover-bg-tint');
$focusBorderTint = $attributes->get('focus-border-tint');

$bgColor = $bgColor ?? 'gray';
$bgTint = $bgTint ?? 500;
$textColor = $textColor ?? ($bgTint >= 500 ? 'white' : 'black');

$hoverBgTint = $hoverBgTint ?? $bgTint - 100;
$focusBorderTint = $focusBorderTint ?? $bgTint + 200;
@endphp

<button
    {{ $attributes->merge(['type' => 'button', 'class' => "px-4 py-2 bg-${bgColor}-${bgTint} border border-transparent font-semibold text-${textColor} hover:bg-${bgColor}-${hoverBgTint} focus:outline-none focus:border-${bgColor}-${focusBorderTint} focus:shadow-outline-${bgColor} active:bg-${bgColor}-${bgTint} transition ease-in-out duration-150"]) }}>
    {{ $slot }}
</button>
