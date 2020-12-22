@php
// bg-color
// text-color
// position => ['fixed', 'fixed-top', 'fixed-bottom', 'absolute', 'absolute-top', 'absolute-bottom', 'relative']
// top
// left
// right
// bottom

$class = "w-full";
$bgColor = $attributes->get('bg-color', 'white');
$class .= " bg-${bgColor}";
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
