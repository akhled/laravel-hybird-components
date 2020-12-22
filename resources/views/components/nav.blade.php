@php
// bg-color
// bg-color-tint
// text-color
// position => ['fixed', 'fixed-top', 'fixed-bottom', 'absolute', 'absolute-top', 'absolute-bottom', 'relative']
// top
// left
// right
// bottom

$class = "w-full";
$bgColor = $attributes->get('bg-color', 'white');
$bgColorTint = $attributes->get('bg-color-tint');
$class .= " bg-${bgColor}" . ($bgColorTint ? "-${bgColorTint}" : "");

$textColor = $attributes->get('text-color', 'black');
$class .= " text-${textColor}";

$position = new \Akhaled\HybridComponents\Resolve\Position($attributes);
$class .= " ".$position->css();
@endphp

<nav {{ $attributes->merge([
    'class' => $class,
]) }}>
    {{ $slot }}
</nav>
