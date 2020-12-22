@php
$class = "flex align-center justify-between";
$bgColor = $attributes->get('bg-color', 'white');
$textColor = $attributes->get('text-color', $bgColor == 'black' ? 'white' : 'black');
$animate = $attributes->get('animate', false);

$default_attributes = [
    'class' => $class,
    'x-data' => json_encode(['dismiss' => false]),
    'x-show' => '!dismiss',
];

if ($animate && $animate == true) {
    $default_attributes = array_merge($default_attributes, [
        "x-transition:enter"=>"transition ease-out duration-300",
        "x-transition:enter-start"=>"opacity-0 transform scale-90",
        "x-transition:enter-end"=>"opacity-100 transform scale-100",
        "x-transition:leave" => "transition ease-in duration-300",
        "x-transition:leave-start"=>"opacity-100 transform scale-100",
        "x-transition:leave-end"=>"opacity-0 transform scale-90",
    ]);
}
@endphp

<x-hybrid-nav {{ $attributes->merge($default_attributes) }}>
    <div>
        {{ $slot }}
    </div>
    <x-hybrid-button-times text-color="{{ $textColor }}"
        x-on:click="dismiss=true" />
</x-hybrid-nav>
